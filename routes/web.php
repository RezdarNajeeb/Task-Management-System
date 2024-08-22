<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::view('/create', 'tasks.create');
Route::view('/edit', 'tasks.edit');
Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');
