<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Contract;
use App\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$users     = Auth::user();
        $contracts = Contract::with('contactInfo')->where('status', '0')->where('sender_id', $users->id)->orderBy('id', 'desc')->take(5)->get();
        if (Auth::check() && Auth::user()->isAdmin()) {
            $contracts = Contract::with('contactInfo')->where('status', '0')->orderBy('id', 'desc')->take(5)->get();
        }
        $contacts  = Contact::where('create_by', $users->id)->orderBy('id', 'desc')->take(5)->get();
        if (Auth::check() && Auth::user()->isAdmin()) {
           $contacts = Contact::orderBy('id', 'desc')->take(5)->get();
        }
    	return view('home', compact('users','contracts','contacts'));
    }
}
