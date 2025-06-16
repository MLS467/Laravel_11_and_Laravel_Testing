<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\Home21Controller;
use App\Http\Controllers\homeController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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

// #VIEWS
// Route::view('/home', 'Home.home')->name('hm');
// Route::view('/test/{teste}', 'Home.test')->name('tt');

// #CONTROLLERS
// Route::get('/home/batata/frita', homeController::class)->name('home');
// Route::get('/home/batata/{teste}', [homeController::class, 'test'])->name('test');


// Controller
// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::prefix('/student')
    ->group(function () {
        Route::controller(Home21Controller::class)
            ->group(function () {

                Route::get("/", "index")->name('hm');
            });
    });

Route::prefix('/student/Brazil')
    ->group(function () {
        Route::controller(studentController::class)
            ->group(function () {

                Route::get("/", "index");
            });
    });