<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/', [controladorVistas::class, 'home'])->name('rutaInicio');
Route::get('/repaso1', [controladorVistas::class, 'repaso'])->name('rutaRepaso');
Route::post('/repaso1', [controladorVistas::class, 'convertir'])->name('rutaConvertir');

