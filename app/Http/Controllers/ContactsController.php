<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Contact;
use Spatie\Permission\Models\Role;
use LaravelDocusign\Facades\DocuSign;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;


class ContactsController extends Controller
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
        $user = Auth::user();
        $users = Contact::where('create_by', $user->id)->get();
        if (Auth::check() && Auth::user()->isAdmin()) {
           $users = Contact::all();
        }
        return view('contacts.index', compact('users'));
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
        $roles = Role::get()->pluck('name', 'name');

        return view('contacts.create', compact('roles'));
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
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:contacts',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($image = $request->file('profile_image')) {
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $mimeType = $image->getClientMimeType();
            $fileNameToStore = str_replace(" ", "-", $filename) . '_' . time() . '.' . $extension;
            $path = $image->storeAs('profile', $fileNameToStore);
        }
        $request->request->add(['create_by' => $user->id]); //add request
        $allRequest = $request->all();
        unset($allRequest['profile_image']);
        if (!empty($path)) {
            $allRequest['profile_image'] = $path;
        }
        $contact = Contact::create($allRequest);
        return redirect()->route('admin.contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }

        $user = Contact::find($id);

        return view('contacts.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $user = Contact::find($id);

        return view('contacts.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($image = $request->file('profile_image')) {
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $mimeType = $image->getClientMimeType();
            $fileNameToStore = str_replace(" ", "-", $filename) . '_' . time() . '.' . $extension;
            $path = $image->storeAs('profile', $fileNameToStore);
        }
        $allRequest = $request->all();
        unset($allRequest['profile_image']);
        if (!empty($path)) {
            $allRequest['profile_image'] = $path;
        }
        $contact = Contact::find($id);
        $contact->update($allRequest);
        return redirect()->route('admin.contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }

        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->route('admin.contacts.index');
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('sales_manage')) {
            return abort(401);
        }
        Contact::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
