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

    public function invalidasi()
    {
        $orders = Order::where('status','=',3)->get();
        return view('layouts\order_confirmation_pay',compact('orders'));
    }

    public function validasi(Request $request, $id=null)
    {
            $orders = Order::where('id', $id)
            ->update(['status' => 2,
                    'pay' => 1]);
            return redirect()->route('order.invalidasi');
        
     }
    
    public function edit(Request $request,Order $orders)
    {
        request()->validate([
            'hourly_price' => 'required',
        ]);
        $orders->update($request->all());
        return redirect()->route('order')
                        ->with('success','Member updated successfully');
    }

    public function search(Request $request){
        $cari = $request->get('search');
        $orders = Order::where('id','LIKE','%'.$cari.'%')->paginate(10);
        return view('layouts\order',compact('orders'));
    }

    public function search_valid(Request $request){
        $cari = $request->get('search');
        $orders = Order::where('id','LIKE','%'.$cari.'%')->paginate(10);
        return view('layouts\order_confirmation_pay',compact('orders'));
    }


    
}
