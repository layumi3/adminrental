<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        // return view('layouts\user.index',compact('contacts',$contacts));
        
        return view('layouts\order',compact('orders'));
    }

   public function konfirmasi_pay()
    {
        $params = array('status'=>'3');
        
        $orders = Order::where($params)->get();
        
        return view('layouts\confirmation_pay',compact('orders'));
    }

    public function validasi_pembayaran(Request $request, $id=null)
    {
            $contact = Order::where('id', $id)
            ->update(['status' => 2]);
            return redirect()->route('pesanan');
        
     }
}
