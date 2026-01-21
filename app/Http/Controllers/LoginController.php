<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function form()
    {
         return view('login');
    }

    public function login(Request $request)
    {
        $login = $request->only('email','password');

        if (Auth::attempt($login)) {
            return redirect('/dosen');
        }

        return back()->with('gagal','gagal login!');
    }
}