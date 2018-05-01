<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FeedbackController extends Controller
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
    	// $products = Product::all();
        echo "contacts";
        // return view('layouts\user.index',compact('contacts',$contacts));
        
        // return view('layouts\product',compact('products'));
    }
}
