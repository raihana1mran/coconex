<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($credentials['email'] === 'admin@coconex.com' && $credentials['password'] === 'admin123') {
            Cookie::queue('cms_auth', 'authenticated', 60 * 24 * 7);
            return redirect('/cms');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Cookie::queue(Cookie::forget('cms_auth'));
        return redirect('/');
    }
}