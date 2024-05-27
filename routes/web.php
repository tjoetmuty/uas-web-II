<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route :: resource('/myclass', \App\Http\Controllers\ClassController::class);
Route :: resource('/schedule', \App\Http\Controllers\ScheduleController::class);
// Route::get('/schedule', [\App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule.index');
// Route::post('/schedule', [\App\Http\Controllers\ScheduleController::class, 'store'])->name('schedule.store');

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::post('/user/login', [\App\Http\Controllers\UserController::class, 'login'])->name('user.login');

// Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
// Route::post('/user/login', [\App\Http\Controllers\UserController::class, 'login'])->name('user.login');
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'register'])->name('register.store');