<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::redirect('/', '/home'); // redireciona para a home na rota raiz

Route::get('/home', homeController::class)
    ->name('home');

Route::get('/about/{name}', aboutController::class)
    ->name('about'); // rota com parâmetro

Route::get('admin-login', LoginController::class)
    ->name('login'); // rota para login do admin

Route::get("/user_form", [userController::class, 'create'])
    ->name('user_create'); // rota para o formulário do usuário

Route::post("/user_form", [userController::class, 'store'])
    ->name('user_store'); // rota para salvar o usuário