<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formLogin()
    {
        return redirect()->route('home');
    }
    public function login(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([            
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('admin');
        }

        return redirect()->back()->withErrors(['email' => 'Email or password is incorrect.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
