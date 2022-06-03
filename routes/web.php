<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.welcome');
})->name('home');

Route::get('/apply', function () {
    return view('guest.apply');
})->name('apply');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');





});
