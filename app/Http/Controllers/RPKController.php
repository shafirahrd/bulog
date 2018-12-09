<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Rpk;
use App\User;

class RPKController extends Controller
{
    public function index()
    {
        $rpk = Rpk::all();

        return view('admin.rpk-index', compact('rpk'));
    }

    public function status_update(Request $request, $id)
    {
        $rpk = RPK::find($id);
        $rpk->status = 1;
        $rpk->save();

        return redirect('admin-RPK');
    }

    public function store(Request $request)
    {
        $rpk = new Rpk();
        $rpk->ktp = $request->get('ktp');
        $rpk->npwp = $request->get('npwp');
        $rpk->pemilik_toko = $request->get('pemilik_toko');
        $rpk->nama_toko = $request->get('nama_toko');
        $rpk->alamat = $request->get('alamat');
        $rpk->kota_kabupaten = $request->get('kota_kabupaten');
        $rpk->kode_pos = $request->get('kode_pos');
        $rpk->nomor_hp = $request->get('nomor_hp');
        $rpk->email = $request->get('email');
        $rpk->status = 0;
        if ($request->hasFile('foto_identitas')) {
            $rpk->foto_identitas = $request->foto_identitas->getClientOriginalName();
            $request->foto_identitas->storeAs('public/images3/foto_identitas', $rpk->foto_identitas);
        } else {
            $rpk->foto_identitas = 'Foto Identitas tidak ditemukan';
        }
        if ($request->hasFile('foto_izin_usaha')) {
            $rpk->foto_izin_usaha = $request->foto_izin_usaha->getClientOriginalName();
            $request->foto_izin_usaha->storeAs('public/images3/foto_izin_usaha', $rpk->foto_izin_usaha);
        } else {
            $rpk->foto_izin_usaha = 'Foto Izin Usaha tidak ditemukan';
        }
        if ($request->hasFile('foto_npwp')) {
            $rpk->foto_npwp = $request->foto_npwp->getClientOriginalName();
            $request->foto_npwp->storeAs('public/images3/foto_npwp', $rpk->foto_npwp);
        } else {
            $rpk->foto_npwp = 'Foto NPWP tidak ditemukan';
        }
        $rpk->save();

        return redirect('daftar')->with('success', 'Data telah berhasil didaftarkan ');
    }

    public function akun_create()
    {
        $rpk = Rpk::all();

        return view('admin.akun-create', compact('rpk'));
    }

    public function akun_store(Request $request)
    {
        $user = new User();
        $user->id_rpk = $request->get('id_rpk');
        $user->username = $request->get('username');
        $user->password = Hash::make($request->get('password'));
        $user->save();

        return redirect('admin-RPK')->with('success', 'Akun RPK berhasil ditambahkan');
    }
}
