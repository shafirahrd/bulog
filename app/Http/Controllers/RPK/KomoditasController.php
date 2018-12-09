<?php

namespace App\Http\Controllers\RPK;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Komoditas;
use App\Produk;

class KomoditasController extends Controller
{
    public function index($id)
    {
    	$komoditas = DB::table('produk')
            ->leftjoin('komoditas','komoditas.id_produk','=','produk.id_produk')->where('komoditas.id_rpk',$id)
            ->where('komoditas.tipe','=','belanja')
            ->get(); 

    	return view('rpk.komoditas', ['komoditas'=>$komoditas]);
    }

    public function add()
    {
    	return view('rpk.komoditas-update');
    }

    
}
