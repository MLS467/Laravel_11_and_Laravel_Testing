<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware('AgeAndCountryCheck')->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/home', HomeController::class)
        ->name('home');
});