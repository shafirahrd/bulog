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
            ->leftjoin('komoditas','komoditas.id_produk','=','produk.id_produk')
            ->where('komoditas.id_rpk',$id)
            ->where('komoditas.tipe','=','belanja')
            ->get(); 

    	return view('rpk.komoditas', ['komoditas'=>$komoditas]);
    }

    public function add()
    {
    	return view('rpk.komoditas-add');
    }

    public function insert(Request $request)
    {
    	$nama = Produk::where('produk.nama','=',$request->get('nama'))->first();

    	$komoditas = new Komoditas();
    	$komoditas->id_rpk = '1';
        $komoditas->id_produk = $nama->id_produk;
        $komoditas->jumlah = $request->get('jumlah');
        $komoditas->tipe = $request->get('tipe');
        $komoditas->save();

        return redirect('rpk-komoditas/1');
    }

    public function edit($id)
    {
    	$komoditas = DB::table('komoditas')
            ->leftjoin('produk','produk.id_produk','=','komoditas.id_produk')
            ->where('id_laporan', $id)
            ->get();

        return view('rpk.komoditas-form', ['komoditas'=>$komoditas]);
    }

    public function update(Request $request, $id)
    {
        DB::table('komoditas')->where('id_laporan', $id)->update($request->except(['_token']));

        return redirect('rpk-komoditas/1');
    }
}
