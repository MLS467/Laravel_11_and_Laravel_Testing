<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use Illuminate\Support\Facades\Route;


Route::get('/', homeController::class)
    ->name('home')
    ->middleware([AgeCheck::class, CountryCheck::class]);

Route::get('/about', aboutController::class)
    ->name('about')
    ->middleware(CountryCheck::class);