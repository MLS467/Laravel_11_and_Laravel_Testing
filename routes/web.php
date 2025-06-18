<?php

use App\Http\Controllers\studentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/student', [studentController::class, 'getStudents'])
    ->name('student');


Route::prefix('/user')->group(function () {
    Route::get('/', UserController::class)->name('users');
    Route::get('/api', [UserController::class, 'getUser'])->name('getUser');
});