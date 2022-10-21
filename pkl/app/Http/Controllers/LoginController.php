<?php

namespace App\Http\Controllers;

use App\Models\User;
use illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function proseslogin(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/dashboard');
        }
        return redirect('Login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/Login');
    }

    public function registrasi()
    {
        return view('Admin.registrasi');
    }

    public function saveregistrasi(Request $request)
    {
        //dd($request->all());

        User::create([
            'name' => $request->name,
            'level' => 'User',
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return view('Admin.registrasi');
    }
}
