<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class);

Route::get('/home', [UserController::class, 'index'])
    ->name('home');

Route::post('/add', [UserController::class, 'getPostUser'])
    ->name('add');