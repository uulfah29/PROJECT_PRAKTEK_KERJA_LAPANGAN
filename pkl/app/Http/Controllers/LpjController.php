<?php

namespace App\Http\Controllers;

use App\Models\Lpj;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class LpjController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        //$data = Lpj::all();
        $data = Lpj::where('namaorganisasi', 'LIKE', '%' . $search . '%')
            ->get();
        return view('Admin.Dpl', compact('data'));
    }

    public function createlpj()
    {
        $id = IdGenerator::generate(['table' => 'lpjs', 'field' => 'id', 'length' => 5, 'prefix' => 'LPJ']);
        return view('User.Lpj', compact(['id']));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'lpj' => 'required'
        ]);
        $data1 = $request->except(['_token', 'submit']);
        if ($file = $request->hasFile('lpj')) {
            $validate = request()->validate([
                'lpj' => ['mimes:pdf']
            ]);
            $file = $request->file('lpj');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/Lpj';
            $file->move($destinationPath, $fileName);
            $data1['lpj'] = $file->getClientOriginalName();
        }
        Lpj::create($data1);
        return redirect('createlpj');
    }
}
