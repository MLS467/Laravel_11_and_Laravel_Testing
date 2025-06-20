<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class);

Route::get('/login', [LoginController::class, 'login'])
    ->name('login');

Route::get('/logout', [loginController::class, 'logout'])
    ->name('logout');

Route::post('/auth', [LoginController::class, 'auth'])
    ->name('auth');

Route::get('/profile', [LoginController::class, 'profile'])
    ->name('profile');