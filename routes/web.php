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
Route::resource('pesanan','OrderController');
$this->get('member', 'MemberController@index')->name('member');
$this->put('member/{id}', 'MemberController@show')->name('show');
$this->get('feedback', 'FeedbackController@index')->name('feedback');
$this->get('produk', 'ProductController@index')->name('produk');
$this->get('produkcar', 'ProductController@car')->name('produkcar');
$this->get('pesanan', 'OrderController@index')->name('pesanan');
$this->get('pesanan_pay', 'OrderController@index_pay')->name('pesanan_pay');
$this->get('pesanan/{id}', 'OrderController@validasi')->name('pesanan.validasi');
$this->post('edit/{id}', 'OrderController@edit')->name('pesanan.edit');
$this->get('blok/{id}', 'MemberController@blok')->name('blok.blok');
$this->get('unblok/{id}', 'MemberController@blok')->name('blok.unblok');
