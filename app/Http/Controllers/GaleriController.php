<?php

namespace App\Http\Controllers;

use App\Galeri;
use DB;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = DB::table('galeri')->get();

        return view('admin.index', ['galeri' => $galeri]);
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::find($id);
        $galeri->id = $request->input('id', $id);
        $galeri->nama = $request->input('nama');
        $galeri->gambar = $request->input('gambar');
        $galeri->save();

        return redirect('admin.index')->with('success', 'Galeri berhasil ditambahkan');
    }
}
