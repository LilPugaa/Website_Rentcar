<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerDashboard;
use App\Http\Controllers\Auth\AuthController;

// Route ke halaman utama yang akan menampilkan form login
Route::get('/', [AuthController::class, 'indexLogin'])->name('home');

// Rute untuk tampilan login (GET) dan aksi login (POST)
Route::get('/login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Rute untuk registrasi (GET dan POST)
Route::get('/register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

// Rute untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute khusus untuk admin yang sudah login untuk mengakses dashboard dan CRUD rentals
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [ControllerDashboard::class, 'index'])->name('dashboard');
    Route::resource('/rentals', ControllerDashboard::class);  // CRUD untuk rentals hanya dapat diakses admin
});  

// Rute lain yang dapat diakses semua pengguna yang login
Route::get('/charts', function () {
    return view('charts');
})->name('charts');

Route::get('/user', function () {
    return view('after');
})->name('user');

// Rute untuk tampilan tabel rentals
Route::get('/tables', [ControllerDashboard::class, 'index'])->name('rentals.tables');
