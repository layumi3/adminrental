<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class VerifikasiOnPayController extends Controller
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
        $params = array('status'=>'3');
        
        $orders = Orders::where($params)->get();
        // echo "$contacts";
        // return view('layouts\user.index',compact('contacts',$contacts));
        
        return view('layouts\order',compact('orders'));
    }
}
