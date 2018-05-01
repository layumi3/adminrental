<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
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
    	$orders = Order::all();      
        return view('layouts\order',compact('orders'));
    }

    public function show(Request $request, $id=null)
    {
            $contact = Order::where('id', $id)
            ->update(['status' => 3]);
            return redirect()->route('pesanan');
        
     }
}
