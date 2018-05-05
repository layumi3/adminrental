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

    public function show(Request $request, $id=null)
    {
        $product = Product::find($id);
        return view('perental\showproduct',compact('product'));
    }

    public function update(Request $request, $xd)
    {
        $product = new Product();
        $data = $this->validate($request, [
            'hourly_price'=>'required'
        ]);
        $data['id'] = $xd;
        $product->updateProduct($data);

        return redirect('/produk')->with('success', 'New support ticket has been updated!!');
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

    public function search(Request $request){
        $cari = $request->get('search');
        $products = Product::where('plat','LIKE','%'.$cari.'%')->paginate(10);
        return view('layouts\product',compact('products'));
    }

    public function search_invalidasi(Request $request){
        $cari = $request->get('search');
        $products = Product::where('plat','LIKE','%'.$cari.'%')->paginate(10);
        return view('layouts\product_validasi', compact('products'));
    }

}
