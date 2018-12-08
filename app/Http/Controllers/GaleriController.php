<?php

namespace App\Http\Controllers;

use App\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();

        return view('admin.index', compact('galeri'));
    }

    public function edit($id)
    {
        $galeri = Galeri::find($id);

        return view('admin.galeri-update', compact('galeri', 'id_galeri'));
    }

    public function update(Request $request, $id)
    {
        DB::table('galeri')->where('id_galeri', $id)->update($request->all());

        return view('admin.index')->with('success', 'Foto RPK berhasil diubah');
    }

    public function delete(Request $request, $id)
    {
        $galeri = Galeri::find($id);
        $galeri->delete();

        return view('admin.index')->with('success', 'Foto RPK berhasil dihapus');
    }
}
