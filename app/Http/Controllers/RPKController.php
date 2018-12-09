<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rpk;

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
}
