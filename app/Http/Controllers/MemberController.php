<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MemberController extends Controller
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
$client = new Client();
$response =     $client->request('get', '/token');
//         $guzzleClient = new GuzzleHttp\Client(['base_uri' => 'https://api.rentallin.id/']);
// $client = json_api('v1')->client($guzzleClient);

        // $client = new Client(['base_uri' => 'https://api.rentallin.id/','timeout'  => 2.0,]);
        // $response =     $client->request('get', '/token');

        // $token =  $response->getBody();

        // $response =     $client->request('POST', '/login',[
        //                 'headers' => [
        //                     'X-CSRF-TOKEN' => $token,
        //                 ]
        //             ]);
        // $response = $client->get('https://api.rentallin.id/contacts');
    	// $client = new Client(); //GuzzleHttp\Client
     //    $result = $client->get('https://api.rentallin.id/contacts');
        // return view('layouts\user',compact('items'));
    }
}
