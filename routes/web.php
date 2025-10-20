<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

// Authentication routes with email verification
Auth::routes(['verify' => true, 'reset' => true]);

Route::get('/', function () {
    return to_route('tasks.index');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('tasks', TaskController::class);

    Route::delete('/logout', [SessionController::class, 'destroy']);
});


Route::get('/test', [TaskController::class, 'test']);
