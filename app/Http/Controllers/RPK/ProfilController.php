<?php

namespace App\Http\Controllers\RPK;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Rpk;

class ProfilController extends Controller
{
    public function index($id)
    {
    	$profil = DB::table('rpk')->where('id_rpk',$id)->get();
    	$username = DB::table('users')->where('id_rpk',$id)->get();

    	return view('rpk.profil', ['profil'=>$profil, 'username'=>$username]);
    }
}
