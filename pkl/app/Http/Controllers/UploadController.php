<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use File;

class UploadController extends Controller
{
    public function index()
    {
        return view('uploadfile');
    }
    public function store(Request $request)
    {
        //
        $request->validate([
            'image.*' => 'mimes:doc,pdf,docx,zip,jpeg,png,gif,svg',
        ]);
        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/images';
            $file->move($destinationPath, $fileName);
            return redirect('/uploadfile');
        }
    }
}
