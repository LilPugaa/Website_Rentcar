<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    /**
     * Tampilkan halaman registrasi
     */
    public function indexRegister()
    {
        return view('auth.register');
    }

    /**
     * Tampilkan halaman login
     */
    public function indexLogin()
    {
        return view('auth.login');
    }

    /**
     * Proses registrasi
     */
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users', // Pastikan email unik
            'password' => 'required|string|min:8|confirmed', // Password confirmation harus sesuai
        ]);
    
        // Jika validasi berhasil, buat user baru
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'user', // Atur role sesuai kebutuhan
        ]);
    
        // Setelah berhasil, redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }
    
    /**
     * Proses login
     */
public function login(Request $request)
{
    // Validasi input
    $request->validate([
        'email' => 'required|email|exists:users,email',
        'password' => 'required|string|min:6',
    ]);

    // Cek kredensial login dengan Auth::attempt()
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        $user = Auth::user();
        return $this->authenticated($request, $user);
    }

    return redirect()->back()->withErrors([
        'email' => 'Email atau password salah.',
    ])->withInput($request->only('email'));
}


    /**
     * Setelah login berhasil, arahkan berdasarkan role
     */
    protected function authenticated(Request $request, $user)
    {
        // Mengarahkan pengguna berdasarkan role
        return $user->hasRole('admin') 
            ? redirect()->route('dashboard')  // Admin diarahkan ke dashboard
            : redirect()->route('user');      // Pengguna biasa diarahkan ke halaman user
    }
    

    /**
     * Logout user
     */
    public function logout(Request $request)
    {
        Auth::logout(); // Logout pengguna
        return redirect()->route('login')->with('success', 'Logout berhasil.'); // Redirect ke halaman login
    }
}
