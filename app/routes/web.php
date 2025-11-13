<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [UserController::class, 'showLoginForm'])->name('user.showLoginForm');
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('user.showRegisterForm');

// logic for the upper 2 routes
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/register', [UserController::class, 'register'])->name('user.register');
