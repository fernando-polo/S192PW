<?php

use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;


// Nueva sintáxis de la ruta, definimos la ruta, mandamos a llamar al controlador y su función y el apodo de las vistas

// controlador vistas
Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');

// Route::get('/clientes', [controladorVistas::class, 'consulta'])->name('rutaclientes');

Route::view('/component', 'componentes')->name('rutacomponentes');

Route::post('/enviarCliente', [controladorVistas::class, 'procesarCLiente'])->name('rutaEnviar');

// controlador cliente
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');

Route::post('/cliente', [clienteController::class, 'store'])->name('enviaCliente');

Route::get('/clientes', [clienteController::class, 'index'])->name('rutaclientes');

Route::get('/clientesUpdate', [clienteController::class, 'edit'])->name('rutaclientesUpdate');
