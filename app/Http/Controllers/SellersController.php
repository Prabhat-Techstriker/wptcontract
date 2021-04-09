<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
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

class SellersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $sellers = Seller::all();

        return view('sellers.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $roles = Role::get()->pluck('name', 'name');

        return view('sellers.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:sellers'
        ]);
        
        $sellers = Seller::create($request->all());
        return redirect()->route('admin.sellers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $seller = Seller::find($id);

        return view('sellers.show', compact('seller'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $seller = Seller::find($id);

        return view('sellers.edit', compact('seller'));
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
       if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $request->validate([
            'name'=>'required',
            'email'=>'required'
        ]);

        $contact = Seller::find($id);
        $contact->update($request->all());
        return redirect()->route('admin.sellers.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $user->delete();

        return redirect()->route('admin.sellers.index');
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        Seller::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

    
}
