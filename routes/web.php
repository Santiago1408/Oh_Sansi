<?php

use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\PaymentOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('inscripciones')->name('inscriptions.')->group(function () {
    Route::get('/', [InscriptionController::class, 'index'])->name('index');
    Route::get('/{id}', [InscriptionController::class, 'show'])->name('show');
    Route::post('/{id}/generar-orden', [PaymentOrderController::class, 'generateFromInscription'])->name('generate_order');
    Route::get('/{id}/pdf', [InscriptionController::class, 'downloadPdf'])->name('pdf');
});
