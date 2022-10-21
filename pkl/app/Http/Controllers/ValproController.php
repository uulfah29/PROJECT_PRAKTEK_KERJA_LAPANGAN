<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class ValproController extends Controller
{
    public function index()
    {
        $data = Proposal::all();
        return view('Admin.Dpp', compact(['data']));
    }

    public function setuju($id)
    {
        $data = Proposal::find($id);
        $data->status = 1;
        $data->save();
        return redirect('/Dpp');
    }

    public function revisi($id)
    {
        $data = Proposal::find($id);
        $data->status = 2;
        $data->save();
        return redirect('/Dpp');
    }

    public function tolak($id)
    {
        $data = Proposal::find($id);
        $data->status = 3;
        $data->save();
        return redirect('/Dpp');
    }
}
