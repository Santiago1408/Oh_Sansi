<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\HomeController;
use App\Models\Area;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/registro', [HomeController::class, 'registro'])->name('registro');
Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/areas', [AreaController::class, 'index'])->name('areas');
Route::post('/areas', [AreaController::class, 'store'])->name('areas.store');
Route::delete('/areas/{id}', [AreaController::class, 'destroy'])->name('areas.destroy');

Route::get('/admin', [HomeController::class, 'admin'])->name('admin');