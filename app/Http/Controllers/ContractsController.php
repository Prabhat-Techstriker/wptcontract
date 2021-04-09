<?php

namespace App\Http\Controllers;

use App\Contract;
use App\ProjectType;
use App\PropertyType;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Contact;
use App\Seller;
use Spatie\Permission\Models\Role;
use LaravelDocusign\Facades\DocuSign;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Elibyy\TCPDF\Facades\TCPDF;
use Response;

class ContractsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $info = Contract::all();

        return view('contracts.index', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $user = Auth::user();
        $contacts = Contact::where('create_by', $user->id)->get();
        if (Auth::check() && Auth::user()->isAdmin()) {
           $contacts = Contact::all();
        }
        $sellers = Seller::all();
        $projects = ProjectType::all();

        return view('contracts.create', compact('contacts','sellers','projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
       
        $user = Auth::user();
        $request->request->add(['sender_id' => $user->id]); //add request
        $contract_type = $request->input('contract_type');
        $subject       = $request->input('subject');
        $message_body  = $request->input('message_body');
        $contract_id   = $request->input('contract_id');
        $projectType   = $request->input('projectType');
        $propertyType  = $request->input('propertyType');
        $fromName      = $request->input('name');
        $fromAddress   = $request->input('address');
        $contactinfo   = Contact::whereIn('id', $contract_id)->get();
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        foreach ($contactinfo as $contact) {
        $contactname   = $contact->name;
        $contactemail  = $contact->email;
        $contactaddress  = $contact->address;
        $contactid     = $contact->id;
        $request->request->add(['name'        => $contactname]);
        $request->request->add(['email'       => $contactemail]);
        $request->request->add(['address'     => $contactaddress ?? 'N.A']);
        $request->request->add(['contract_id' => $contactid]);
        $nameFile = uniqid();
        
        if(in_array('amendment', $request->all())){
          $request->request->add(['amendment' => 1]);
        }else{
           $request->request->add(['amendment' => 0]);
        }
        if(in_array('seller_email_contract', $request->all())){
          $request->request->add(['seller_email_contract' => 'NULL']);
        }
        
        if ($projectType == 2 && $propertyType == 6) { // The Alaia Belize Condominium
          $html = theAlaiaBelizeCondominiumTemplate($request->all());
        }
        if ($projectType == 2 && $propertyType == 10) { // The Alaia Belize Banyan Bay
          $html = theAlaiaBelizeBanyanBayTemplate($request->all());
        }
        
        if ($projectType == 2 && $propertyType == 11) { // The Alaia Belize Banyan Bay
          $html = beachClubReservation($request->all());
        }

        if($projectType == 1) { // St Regis Los Cabos
          $html = stRegisLosCabosTemplate($request->all());
        }
        $pdf::SetTitle('CONDOMINIUM UNIT');
        $pdf::AddPage();
        $pdf::writeHTML($html, true, false, true, false, '');

        if ($contract_type == 1) { // Send By DocUSign
          $pdf::Output(public_path('DocuSign') . '/'. $nameFile . '.pdf' , 'F');
        } else { // Print Only
          $pdf::Output($nameFile . '.pdf' , 'D');
        } 
        $pdf::reset();
        $request->request->add(['file_name' => $nameFile]); //add request
        $request->request->add(['file_path' => 'DocuSign/'. $nameFile . '.pdf']);     //add request
        $url = url('public/DocuSign/'. $nameFile . '.pdf');
        if ($contract_type == 1) { // Send By DocUSign
          $integratorKey = env('DOCUSIGN_INTEGRATOR_KEY');
          $email         = env('DOCUSIGN_USERNAME');
          $password      = env('DOCUSIGN_PASSWORD');
          $docusignUrl   = env('DOCUSIGN_URL');
          $recipient_email = $contactemail;
          $name = $contactname;
          $document_name = $url;
          $header = "<DocuSignCredentials><Username>" . $email . "</Username><Password>" . $password . "</Password><IntegratorKey>" . $integratorKey . "</IntegratorKey></DocuSignCredentials>";
          $url = $docusignUrl."/restapi/v2/login_information";
          $curl = curl_init($url);
          curl_setopt($curl, CURLOPT_HEADER, false);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-DocuSign-Authentication: $header"));
          $json_response = curl_exec($curl);
          $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
          if ( $status != 200 ) {
              echo "error calling webservice, status is:" . $status;
              exit(-1);
          }
          $response = json_decode($json_response, true);
          $accountId = $response["loginAccounts"][0]["accountId"];
          $baseUrl = $response["loginAccounts"][0]["baseUrl"];
          curl_close($curl);
          $data = "{
            \"emailBlurb\":\"".$message_body."\",
            \"emailSubject\":\"".$subject."\",
            \"documents\":[
              {
                \"documentId\":\"1\",
                \"name\":\"".$document_name."\"
              }
            ],
            \"recipients\":{
              \"signers\":[
                {
                  \"email\":\"$recipient_email\",
                  \"name\":\"$name\",
                  \"recipientId\":\"1\",
                  \"tabs\":{
                    \"signHereTabs\":[
                      {
                        \"anchorString\":\"Signature:\",
                        \"anchorXOffset\":\"0\",
                        \"anchorYOffset\":\"0\",
                        \"documentId\":\"1\",
                        \"pageNumber\":\"1\"
                      }
                    ]
                  }
                }
              ]
            },
            \"status\":\"sent\"
          }";  
          $file_contents = file_get_contents($document_name);
          $requestBody = "\r\n"
          ."\r\n"
          ."--myboundary\r\n"
          ."Content-Type: application/json\r\n"
          ."Content-Disposition: form-data\r\n"
          ."\r\n"
          ."$data\r\n"
          ."--myboundary\r\n"
          ."Content-Type:application/pdf\r\n"
          ."Content-Disposition: file; filename=\"order_form.pdf\"; documentid=1 \r\n"
          ."\r\n"
          ."$file_contents\r\n"
          ."--myboundary--\r\n"
          ."\r\n";
          // *** append "/envelopes" to baseUrl and as signature request endpoint
          $curl = curl_init($baseUrl . "/envelopes" );
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($curl, CURLOPT_POST, true);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $requestBody);
          curl_setopt($curl, CURLOPT_HTTPHEADER, array(
              'Content-Type: multipart/form-data;boundary=myboundary',
              'Content-Length: ' . strlen($requestBody),
              "X-DocuSign-Authentication: $header" )
          );
          $json_response = curl_exec($curl);
          $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
          if ( $status != 201 ) {
              echo "error calling webservice, status is:" . $status . "\nerror text is --> ";
              print_r($json_response); echo "\n";
              exit(-1);
          }
          $response = json_decode($json_response, true);
          $envelopeId = $response["envelopeId"];
          //end send document
          if(!empty($envelopeId)){
            $request->request->add(['envelopeId' => $envelopeId]);
            $requestOnly = $request->only(['sender_id', 'contract_id','subject','message_body','file_name','file_path','envelopeId','seller_email_contract']);
            $contract = Contract::create($requestOnly);
          }
        } else { // Print Only
          return redirect()->route('admin.contracts.sent');
        }

      }
      return redirect()->route('admin.contracts.sent');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }

        $integratorKey = env('DOCUSIGN_INTEGRATOR_KEY');
        $email         = env('DOCUSIGN_USERNAME');
        $password      = env('DOCUSIGN_PASSWORD');
        $accountId     = env('DOCUSIGN_ACCOUNT_ID');
        $docusignUrl   = env('DOCUSIGN_URL');
        $header = "<DocuSignCredentials><Username>" . $email . "</Username><Password>" . $password . "</Password><IntegratorKey>" . $integratorKey . "</IntegratorKey></DocuSignCredentials>";
        $notCompleted = Contract::where('id', $id)->whereNull('file_path_completed')->get();
        if (!$notCompleted->isEmpty()) {
          $ch = curl_init(); 
          curl_setopt($ch, CURLOPT_URL, $docusignUrl.'/restapi/v2.1/accounts/'.$accountId.'/envelopes/'.$notCompleted[0]['envelopeId'].'/documents/1');
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-DocuSign-Authentication: $header","Accept: application/pdf","Content-Transfer-Encoding:base64"));
          $response = curl_exec($ch);
          curl_close($ch);
          Storage::disk('local')->put($notCompleted[0]['envelopeId'] . '.pdf', base64_decode($response));
          $contract = Contract::find($notCompleted[0]['id']);
          $contract->file_path_completed = $notCompleted[0]['envelopeId'] . '.pdf';
          $contract->save();
        }
        $info = Contract::with('contactInfo')->find($id);
        return view('contracts.show', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contract $contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contract $contract)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }

        $contract = Contract::find($id);
        $contract->delete();

        return redirect()->route('admin.contracts.index');
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        Contract::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

    public function sent()
    {
      if (! Gate::allows('sales_manage')) {
          return abort(401);
      }
      $user = Auth::user();
      $info = Contract::with('contactInfo')->where('status', '0')->where('sender_id', $user->id)->get();

      if (Auth::check() && Auth::user()->isAdmin()) {
        $info = Contract::with('contactInfo')->where('status', '0')->get();
      }
      return view('contracts.sent', compact('info'));
    }

    public function completed()
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $user = Auth::user();
        $integratorKey = env('DOCUSIGN_INTEGRATOR_KEY');
        $email         = env('DOCUSIGN_USERNAME');
        $password      = env('DOCUSIGN_PASSWORD');
        $accountId     = env('DOCUSIGN_ACCOUNT_ID');
        $docusignUrl   = env('DOCUSIGN_URL');

        $header = "<DocuSignCredentials><Username>" . $email . "</Username><Password>" . $password . "</Password><IntegratorKey>" . $integratorKey . "</IntegratorKey></DocuSignCredentials>";

        $notCompleted = Contract::where('status', '0')->where('envelopeId', '!=', '')->get();

        foreach ($notCompleted as $contract) {
          $ch = curl_init(); 
          curl_setopt($ch, CURLOPT_URL, $docusignUrl.'/restapi/v2.1/accounts/'.$accountId.'/envelopes/'.$contract->envelopeId);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-DocuSign-Authentication: $header"));
          $json_response = curl_exec($ch);
          $response = json_decode($json_response, true);
          $status = $response["status"];
          curl_close($ch);

          if($status == 'completed') {
            $contract = Contract::find($contract->id);
            $contract->status = 1;
            $contract->save();
          }

        }
        $info = Contract::with('contactInfo')->where('status', '1')->where('sender_id', $user->id)->get();
        if (Auth::check() && Auth::user()->isAdmin()) {
          $info = Contract::with('contactInfo')->where('status', '1')->get();
        }
        return view('contracts.completed' , compact('info'));
        
    }

    public function getDatabyId(Request $request)
    {
      if (! Gate::allows('sales_manage')) {
        return abort(401);
      }
      $id = $request->id;
      $seller = Seller::find($id);
      return Response::json($seller);
    }

    public function getProjectportrybyId(Request $request)
    {
      if (! Gate::allows('sales_manage')) {
        return abort(401);
      }
      $properties = PropertyType::where('project_id' , $request->id)->get();
      return Response::json($properties);
    }

}