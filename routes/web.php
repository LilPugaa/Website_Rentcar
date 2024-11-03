<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin', function () {
//     return view('admin');
// }) -> name('admin');

Route::get('/tables', function () {
    return view('tables');
}) -> name('tables');

Route::get('/charts', function () {
    return view('charts');
}) -> name('charts');

Route::get('/login', function () {
    return view('login');
}) -> name('login');

Route::resource('/admin','App\Http\Controllers\controllerDashboard');
