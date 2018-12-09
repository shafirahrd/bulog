<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        if ($request->hasFile('gambar')) {
            $produk->gambar = $request->gambar->getClientOriginalName();
            $request->gambar->storeAs('public/images2', $produk->gambar);
        } else {
            $produk->gambar = 'Gambar tidak ditemukan';
        }
        $produk->save();

        return redirect('admin-produk')->with('success', 'Produk RPK berhasil ditambahkan');
    }

    public function edit($id)
    {
        $produk = DB::table('produk')->where('id_produk', $id)->first();

        return view('admin.produk-update', compact('produk', 'id'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        Storage::delete('public/images2/'.$produk->gambar);
        $produk->nama = $request->get('nama');
        $produk->deskripsi = $request->get('deskripsi');
        $produk->harga = $request->get('harga');
        if ($request->hasFile('gambar')) {
            $produk->gambar = $request->gambar->getClientOriginalName();
            $request->gambar->storeAs('public/images2', $produk->gambar);
        } else {
            $produk->gambar = 'Gambar tidak ditemukan';
        }
        $produk->save();

        return redirect('admin-produk')->with('success', 'Produk RPK berhasil diperbarui');
    }

    public function delete($id)
    {
        $produk = DB::table('produk')->where('id_produk', $id)->first();
        Storage::delete('public/images2/'.$produk->gambar);
        DB::table('produk')->where('id_produk', $id)->delete();

        return redirect('admin-produk')->with('success', 'Produk RPK telah dihapus');
    }
}
