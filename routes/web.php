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
    return view('home');
});

Route::get('admin-galeri', 'GaleriController@index');

//Route::get('/about', 'HomeController@about');
Route::get('/about', function () {
    return view('user.about');
});

Route::get('/produk', function () {
    return view('user.produk');
});

Route::get('/rpk', function () {
    return view('user.rpk');
});

Route::get('/galeri', function () {
    return view('user.galeri');
});

Route::get('/contact', function () {
    return view('user.contact');
});


Route::get('/daftar', function (){
	return view('user.daftar');
});