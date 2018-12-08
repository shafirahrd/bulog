<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use DB;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();

        return view('admin.produk-index', compact('produk'));
    }

    public function create()
    {
        return view('admin.produk-create');
    }

    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->nama = $request->get('nama');
        $produk->deskripsi = $request->get('deskripsi');
        $produk->harga = $request->get('harga');
        $produk->gambar = $request->get('gambar');
        $produk->save();

        return redirect('admin-produk')->with('success', 'produk Foto RPK berhasil ditambahkan');
    }

    public function edit($id)
    {
        // $produk = produk::find($id);
        //$produk = produk::find($id)->select('id_produk')->where('id_produk', $id)->get();
        $produk = DB::table('produk')->where('id_produk', $id)->first();

        return view('admin.produk-update', ['produk' => $produk, 'id' => $id]);
    }

    public function update(Request $request, $id)
    {
        // $produk = produk::find($id);
        // $produk->nama = $request->get('nama');
        // $produk->gambar = $request->get('gambar');
        // $produk->save();
        DB::table('produk')->where('id_produk', $id)->update($request->all());

        return redirect('admin-produk')->with('success', 'produk Foto RPK berhasil diperbarui');
    }

    public function delete($id)
    {
        DB::table('produk')->where('id_produk', $id)->delete();

        return redirect('admin-produk')->with('success', 'produk Foto RPK telah dihapus');
    }
}
