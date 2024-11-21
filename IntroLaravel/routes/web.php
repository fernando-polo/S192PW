<?php

use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;


// Nueva sintáxis de la ruta, definimos la ruta, mandamos a llamar al controlador y su función y el apodo de las vistas

// controlador vistas
Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');

// Route::post('/enviarCliente', [controladorVistas::class, 'procesarCLiente'])->name('rutaEnviar');

Route::view('/component', 'componentes')->name('rutacomponentes');


// controlador cliente
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');

Route::post('/cliente', [clienteController::class, 'store'])->name('enviaCliente');


// ruta para ver la lista de clientes
Route::get('/clientes', [clienteController::class, 'index'])->name('rutaclientes');


// ruta para editar un cliente, pasando el id como parametro
Route::get('/clientes/update/{id}', [clienteController::class, 'edit'])->name('rutaclientesUpdate');


// ruta para actualizar un cliente, con el método PUT
Route::put('/clientes/{id}/update', [clienteController::class, 'update'])->name('rutaActualizarCliente');


// ruta para eliminar un cliente, con el método DELETE
Route::delete('/clientes/delete/{id}', [clienteController::class, 'destroy'])->name('rutaeliminarCliente');

