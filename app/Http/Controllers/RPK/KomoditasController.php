<?php

namespace App\Http\Controllers\RPK;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KomoditasController extends Controller
{
    public function index()
    {
    	return view('rpk.komoditas');
    }
}
