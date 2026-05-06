<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Contracts\Encryption\Encrypter;

class AuthController extends Controller
{
    private const ADMIN_USERNAME = 'admin';
    private const ADMIN_PASSWORD = 'coconex2024';

    public function showLogin(): View
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === self::ADMIN_USERNAME && $password === self::ADMIN_PASSWORD) {
            Cookie::queue('cms_auth', 'authenticated', 60 * 24 * 7);
            return redirect()->route('cms');
        }

        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        Cookie::queue(Cookie::forget('cms_auth'));
        return redirect()->route('login');
    }

    public function checkAuth()
    {
        return Cookie::get('cms_auth') === 'authenticated';
    }
}