<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AuthMiddleware
{
    private const ADMIN_USERNAME = 'admin';
    private const ADMIN_PASSWORD = 'coconex2024';

    public function handle(Request $request, Closure $next)
    {
        $auth = Cookie::get('cms_auth');
        
        if ($auth !== 'authenticated') {
            return redirect()->route('login');
        }
        
        return $next($request);
    }
}