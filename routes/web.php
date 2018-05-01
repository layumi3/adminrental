<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');
Route::resource('contact','ContactController');
Route::resource('product','ProductController');
Route::resource('feedback','FeedbackController');
Route::resource('orders','OrderController');
/*
|Administrator
*/
$this->get('perental', 'MemberController@index')->name('perental');
$this->get('feedback', 'FeedbackController@index')->name('feedback');
$this->get('produk', 'ProductController@index')->name('produk');
$this->get('pesanan', 'OrderController@index')->name('pesanan');
