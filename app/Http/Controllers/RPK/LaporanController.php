<?php

namespace App\Http\Controllers\RPK;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Catatan;

class LaporanController extends Controller
{
    public function index()
    {
    	return view('rpk.laporan');
    }

    public function insert(Request $request)
    {
    	$laporan = new Catatan();
    	$laporan->id_rpk = '1';
        $laporan->catatan = $request->get('catatan');
        $laporan->save();

        return redirect('rpk-laporan');
    }
}
