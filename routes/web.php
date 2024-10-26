<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
}) -> name('admin');

Route::get('/tables', function () {
    return view('tables');
}) -> name('tables');

Route::get('/charts', function () {
    return view('charts');
}) -> name('charts');

Route::get('/settings', function () {
    return view('settings');
}) -> name('settings');
