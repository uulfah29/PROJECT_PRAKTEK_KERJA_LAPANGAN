<?php

namespace App\Http\Controllers;

use App\Models\Lpj;
use Illuminate\Http\Request;

class VallpjController extends Controller
{
    public function index()
    {
        $data = Lpj::all();
        return view('User.Dpl', compact(['data']));
    }

    public function setuju($id)
    {
        $data = Lpj::find($id);
        $data->statuss = 1;
        $data->save();
        return redirect('/Dpl');
    }

    public function revisi($id)
    {
        $data = Lpj::find($id);
        $data->statuss = 2;
        $data->save();
        return redirect('/Dpl');
    }

    public function tolak($id)
    {
        $data = Lpj::find($id);
        $data->statuss = 3;
        $data->save();
        return redirect('/Dpl');
    }
}
