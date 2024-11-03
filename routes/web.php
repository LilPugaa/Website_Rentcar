<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/tables', function () {
    return view('tables');
}) -> name('tables');

Route::get('/charts', function () {
    return view('charts');
}) -> name('charts');

Route::get('/login', function () {
    return view('login');
}) -> name('login');

Route::get('/user', function () {
    return view('user');
}) -> name('user');

Route::resource('/dashboard','App\Http\Controllers\controllerDashboard');
