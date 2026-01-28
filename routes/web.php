<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/register', function () {
    return view('authentication.register');
});

Route::get('/login', function () {
    return view('authentication.login');
});
