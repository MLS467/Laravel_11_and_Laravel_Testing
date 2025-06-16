<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#VIEWS
Route::view('/home', 'Home.home')->name('hm');
Route::view('/test/{teste}', 'Home.test')->name('tt');

#CONTROLLERS
Route::get('/home/batata/frita', homeController::class)->name('home');
Route::get('/home/batata/{teste}', [homeController::class, 'test'])->name('test');