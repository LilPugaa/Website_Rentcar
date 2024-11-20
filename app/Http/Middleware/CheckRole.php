<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::check()) {
            // Jika user memiliki role admin
            if ($role === 'admin' && Auth::user()->role === 'admin') {
                return $next($request);
            }
    
            // Jika user memiliki role user biasa
            if ($role === 'user' && Auth::user()->role === 'user') {
                return $next($request);
            }
        }
    
        return redirect('/home'); // Redirect jika role tidak sesuai
    }
}    

