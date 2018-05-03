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

    public function index_pay()
    {
        $params = array('status'=>'3');

        $orders = Order::where($params)->get();  
        return view('layouts\order_confirmation_pay',compact('orders'));
    }

    public function validasi(Request $request, $id=null)
    {
            $contact = Order::where('id', $id)
            ->update(['pay' => 1]);
            return redirect()->route('pesanan');
        
     }
    
    public function edit(Request $request,Order $orders)
    {
        request()->validate([
            'hourly_price' => 'required',
        ]);
        $orders->update($request->all());
        return redirect()->route('pesanan')
                        ->with('success','Member updated successfully');
    }

    
}
