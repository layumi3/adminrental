<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
 
class ContactController extends Controller

{
 
  public function __construct(){
    // $this->middleware('auth');
  }
 

  // ========================================================================================
  public function all(Request $request){
    return response()->json(Contact::where('user_id', $request->user()->id)->get());
  }


  // ========================================================================================
  public function detail(Request $request, $id=null){
    return response()->json(Contact::where(array('user_id' => $request->user()->id, 'id' => $id)));
  }


  // ========================================================================================
  public function add(Request $request){
  	$this->validate($request, [
      'address' => 'required|string',
      'email' => 'required|email',
      'phone' => 'required|phone:ID',
      'latlong' => 'required|regex:/^(\-?\d+(\.\d+)?),\s*(\-?\d+(\.\d+)?)$/'
    ]);
    $data = $request->all();
    $data['user_id'] = $request->user()->id;
  	$contact = Contact::create($data);
    return response()->json(array('result' => $contact));
  }


  // ========================================================================================
  public function update(Request $request, $id){
  	$this->validate($request, [
      'address' => 'string',
      'email' => 'email',
      'phone' => 'phone:ID',
      'latlong' => 'required|regex:/^(\-?\d+(\.\d+)?),\s*(\-?\d+(\.\d+)?)$/'
    ]);
  	$contact = Contact::where(array('id' => $id, 'user_id' => $request->user()->id))->update($request->all());
    return response()->json(array('result' => $contact));
  }


  // ========================================================================================
  public function delete(Request $request, $id){
  	$contact = Contact::where(array('id' => $id, 'user_id' => $request->user()->id))->delete();
    return response()->json(array('result' => $contact));
  }

}
