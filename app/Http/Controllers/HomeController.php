<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home');
    }
    public function about()
    {
    	return view('user.about');
    }
    public function produk()
    {
    	return view('user.produk');
    }
    public function rpks()
    {
    	return view('user.rpk');
    }
    public function galeri()
    {
    	return view('user.galeri');
    }
    public function contact()
    {
    	return view('user.contact');
    }
    public function daftar()
    {
    	return view('user.daftar');
    }
    public function masuk()
    {
    	return view('user.masuk');
    }
}
