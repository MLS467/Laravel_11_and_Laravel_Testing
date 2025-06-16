<?php

use App\Http\Controllers\Home21Controller;
use Illuminate\Support\Facades\Route;


// Controller
Route::get('/welcome', function () {
    return view('welcome');
});

Route::prefix('/student')
    ->group(function () {
        Route::controller(Home21Controller::class)
            ->group(function () {

                Route::get("/", "index")->name('hm');
            });
    });

Route::prefix('/student/Brazil')
    ->group(function () {
        Route::controller(Home21Controller::class)
            ->group(function () {

                Route::get("/", "index");
            });
    });