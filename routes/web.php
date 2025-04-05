<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/registro', [HomeController::class, 'registro'])->name('registro');
Route::get('/login', [HomeController::class, 'login'])->name('login');
