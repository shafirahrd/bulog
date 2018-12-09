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

Route::resource('galeri', 'GaleriController');
Route::get('galeri-create', 'GaleriController@create');
Route::post('galeri-create', 'GaleriController@store');
Route::get('admin-galeri', 'GaleriController@index');
Route::get('galeri-update/{id}', 'GaleriController@edit');
Route::post('galeri-update/{id}', 'GaleriController@update');
Route::get('galeri-delete/{id}', 'GaleriController@delete');

Route::resource('produk', 'ProdukController');
Route::get('produk-create', 'ProdukController@create');
Route::post('produk-create', 'ProdukController@store');
Route::get('admin-produk', 'ProdukController@index');
Route::get('produk-update/{id}', 'ProdukController@edit');
Route::post('produk-update/{id}', 'ProdukController@update');
Route::get('produk-delete/{id}', 'ProdukController@delete');

Route::resource('rpk', 'RPKController');
Route::get('akun-create', 'RPKController@akun_create');
Route::post('akun-create', 'RPKController@akun_store');
Route::post('status/{id}', 'RPKController@status_update');
Route::post('rpk-create', 'RPKController@store');
Route::get('admin-RPK', 'RPKController@index');
Route::get('rpk-update/{id}', 'RPKController@edit');
Route::post('rpk-update/{id}', 'RPKController@update');
Route::get('rpk-delete/{id}', 'RPKController@delete');

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

Route::get('/daftar', function () {
    return view('user.daftar');
});

Route::get('/masuk', function () {
    return view('user.masuk');
});

//RPK
Route::get('/rpk-dashboard', function () {
    return view('rpk.dashboard');
});

Route::get('/rpk-profil', function () {
    return view('rpk.profil');
});

Route::get('/rpk-komoditas', function () {
    return view('rpk.komoditas');
});

Route::get('/rpk-laporan', function () {
    return view('rpk.laporan');
});
