<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Requests\validadorFormulario;

Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');
Route::get('/formularioContacto', [controladorVistas::class, 'formularioContacto'])->name('rutaformularioContacto');
Route::get('/listadoContactos', [controladorVistas::class, 'listadoContactos'])->name('rutalistadoContactos');


Route::post('/formEnviar', [controladorVistas::class, 'procesarCLiente'])->name('rutaformEnviar');
