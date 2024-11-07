<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerDashboard;

// Route untuk dashboard
Route::get('/', function () {
    return view('dashboard');
});

// Gunakan resource route untuk controllerDashboard
Route::resource('/rentals', ControllerDashboard::class);

// Route untuk charts dan lainnya
Route::get('/charts', function () {
    return view('charts');
})->name('charts');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/tables', [ControllerDashboard::class, 'index'])->name('rentals.tables');
