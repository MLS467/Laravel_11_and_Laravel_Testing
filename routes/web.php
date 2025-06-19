<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::match(['GET', 'POST', 'PUT'], '/home', [UserController::class, "group"])
    ->name('home');

Route::view('/register', 'register');
Route::view('/update/{id}', 'update');