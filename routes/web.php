<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/queries', [UserController::class, 'EloquenteQueryBuilder'])
    ->name('queries');