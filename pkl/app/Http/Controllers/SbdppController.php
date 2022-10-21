<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class SbdppController extends Controller
{
    public function index(Request $request)
    {
        if ($request) {
            $data = Proposal::where('nmaorganisasi', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data = Proposal::all();
        }


        return view('User.SBDPP', compact(['data', 'request']));
    }
}
