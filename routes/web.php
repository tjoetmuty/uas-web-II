<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route :: resource('/myclass', \App\Http\Controllers\ClassController::class);