<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;



Route::get('/', [controladorVistas::class, 'formulario'])->name('rutaform');
Route::post('/RegistrarPeticion', [controladorVistas::class, 'procesarPeticion'])->name('rutaRegistrarPeticion');

