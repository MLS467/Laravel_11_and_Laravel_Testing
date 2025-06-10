<?php

use App\Http\Controllers\auth\Log;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::redirect('/', '/home'); // redireciona para a home na rota raiz

Route::get('/home', homeController::class)
    ->name('home');

Route::view('/home2', 'home'); // retorna a view diretamente

Route::get('/about/{id}', [homeController::class, 'about'])
    ->name('about'); // rota com parâmetro

Route::get('admin-login', [LoginController::class, 'Login'])
    ->name('login'); // rota para login do admin