<?php

namespace App\Http\Controllers;

use App\Models\Lpj;
use Illuminate\Http\Request;

class SbdplController extends Controller
{
    public function index(Request $request)
    {
        if ($request) {
            $data = LPJ::where('namaorganisasi', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data = Lpj::all();
        }

        return view('User.SBDPL', compact(['data', 'request']));
    }
}
