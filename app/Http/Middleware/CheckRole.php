<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|array  $role  Role atau daftar role yang diizinkan
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Periksa jika pengguna tidak masuk atau tidak memiliki peran yang sesuai
        if (!Auth::check()) {
            return redirect()->route('login'); // Mengarahkan ke halaman login jika belum login
        }

        $user = Auth::user();
        
        // Mendukung banyak role, jika `$role` adalah array
        if (is_array($role) && !in_array($user->role, $role) || $user->role !== $role) {
            abort(403, 'Anda tidak memiliki izin untuk mengakses halaman ini.');
        }

        return $next($request);
    }
}
