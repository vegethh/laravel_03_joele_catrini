<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::get('/articoli', [PublicController::class, 'index'])->name('articoli');
Route::get('/articoli/{id}', [PublicController::class, 'show'])->name('articolo_dettaglio');
