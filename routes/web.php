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
/*
|Administrator
*/
Route::resource('contact','ContactController');
Route::resource('member','MemberController');
Route::resource('product','ProductController');
Route::resource('feedback','FeedbackController');
Route::resource('order','OrderController');
// Route::resource('perental','MemberController');

$this->get('member', 'MemberController@index')->name('member');
$this->get('showuser/{id}', 'MemberController@show')->name('showuser');
$this->get('feedback', 'FeedbackController@index')->name('feedback');
$this->get('produk', 'ProductController@index')->name('produk');
$this->get('produkcar', 'ProductController@car')->name('produkcar');
$this->get('produkvalidasi', 'ProductController@invalidasi')->name('produkvalidasi');
$this->get('validasi/{id}', 'ProductController@validasi')->name('validasi.product');
$this->get('order', 'OrderController@index')->name('order');
$this->get('order_invalidasi', 'OrderController@invalidasi')->name('order.invalidasi');
$this->get('order_validasi/{id}', 'OrderController@validasi')->name('order.validasi');
$this->post('edit/{id}', 'OrderController@edit')->name('order.edit');
$this->get('blok/{id}', 'MemberController@blok')->name('blok.blok');
$this->get('unblok/{xd}', 'MemberController@unblok')->name('unblok');
