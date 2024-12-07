<?php


use App\Http\Controllers\controladorVistas;
use Illuminate\Support\Facades\Route;

Route::get('/', [controladorVistas::class, 'form'])->name('rutaForm');
Route::post('/enviarUsuario', [controladorVistas::class, 'procesarUsuario'])->name('rutaprocesarUsuario');
