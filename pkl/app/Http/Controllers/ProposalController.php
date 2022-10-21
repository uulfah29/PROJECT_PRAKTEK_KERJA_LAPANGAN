<?php

namespace App\Http\Controllers;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index()
    {
        $data = Proposal::all();
        return view('Admin.Dpp', compact('data'));
    }

    public function Proposall()
    {
        $id = IdGenerator::generate(['table' => 'proposals', 'field' => 'id', 'length' => 5, 'prefix' => 'PRO']);
        return view('User.Proposall', compact(['id']));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'proposal' => 'required'
        ]);
        $data1 = $request->except(['_token', 'submit']);
        if ($file = $request->hasFile('proposal')) {
            $validate = request()->validate([
                'proposal' => ['mimes:pdf']
            ]);
            $file = $request->file('proposal');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/proposal';
            $file->move($destinationPath, $fileName);
            $data1['proposal'] = $file->getClientOriginalName();
        }
        Proposal::create($data1);
        return redirect('/Proposall');
    }
}
