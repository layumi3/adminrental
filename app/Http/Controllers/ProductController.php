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
    	$products = Product::all();
        // echo "$contacts";
        // return view('layouts\user.index',compact('contacts',$contacts));
        
        return view('layouts\product',compact('products'));

        $params = array('status'=>'1');
      //  $params2 = array('category'=>'Motor');
        
        $products = Product::where($params)->get();
        
        return view('layouts\product',compact('products'));
    }

    public function car()
    {
        $products = Product::all();
        // echo "$contacts";
        // return view('layouts\user.index',compact('contacts',$contacts));
        
        return view('layouts\product',compact('products'));

        $params = array('status'=>'1');
        $params2 = array('category'=>'Mobil');
        
        $products = Product::where($params)->get();
        
        return view('layouts\product',compact('products'));
    }
}
