<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('register', [App\Http\Controllers\RegistratedUserController::class, 'create'])->name('register');
Route::post('register', [App\Http\Controllers\RegistratedUserController::class, 'store'])->name('register.store');

Route::get('login', [App\Http\Controllers\AuthenticatedUserController::class, 'create'])->name('login');
Route::post('login', [App\Http\Controllers\AuthenticatedUserController::class, 'store'])->name('login.store');