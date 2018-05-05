<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
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
    	$products = Product::where('category',"Motor")->where('status','=',1)->get();
        
        return view('layouts\product',compact('products'));
    }

    public function car()
    {
        $products = Product::where('category',"Mobil")->where('status','=',1)->get();
        return view('layouts\product',compact('products'));
    }

    public function invalidasi()
    {
        $products = Product::where('status','=',0)->get();
        return view('layouts\product_validasi',compact('products'));
    }


    public function validasi(Request $request, $id=null)
    {
        $products = Product::where('id',$id)
        ->update(['status' => 1]);
        return redirect()->route('produkvalidasi');
    }

}
