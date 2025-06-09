<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', homeController::class)->name('home');

Route::view('/home2', 'home');

Route::redirect('/', '/home');

Route::get('/about/{id}', function ($id) {
    return view('about', ['id' => $id]);
});