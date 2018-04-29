<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class MemberController extends Controller
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
    	$contacts = Contact::all();
        // echo "$contacts";
        // return view('layouts\user.index',compact('contacts',$contacts));
        
        return view('layouts\user',compact('contacts'));
    }
}