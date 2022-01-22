<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function singin(Request $request)
    {
        if(auth()->attempt($request->only('email', 'password')))
        {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
    public function register()
    {
        return view('register');
    }
}
