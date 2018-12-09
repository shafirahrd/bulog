<?php

namespace App\Http\Controllers\RPK;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Catatan;
use App\Komoditas;
use App\Produk;
use App\Rpk;

class DashboardController extends Controller
{
    public function index($id)
    {
    	$rpk = DB::table('rpk')->where('id_rpk',$id)->get();

    	$catatan = DB::table('catatan')
    		->where('id_rpk',$id)
    		->orderBy('created_at','asc')
    		->get();

    	$last = DB::table('komoditas')
    		->where('id_rpk',$id)
    		->where('tipe','laporan')
    		->orderBy('created_at', 'asc')
    		->get();

    	$komoditas = DB::table('komoditas')
    		->leftjoin('produk','produk.id_produk','=','komoditas.id_produk')
    		->where('id_rpk',$id)
    		->orderBy('jumlah', 'asc')
    		->get();

    	return view('rpk.dashboard', ['rpk'=>$rpk, 'catatan'=>$catatan, 'last'=>$last, 'komoditas'=>$komoditas]);
    }
}
