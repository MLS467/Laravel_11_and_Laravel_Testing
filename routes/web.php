<?php

use App\Http\Controllers\studentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users', UserController::class)->name('users.index');

Route::get('/student', [studentController::class, 'getStudents'])
    ->name('student');