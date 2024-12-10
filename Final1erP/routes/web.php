<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'principal')->name('rutaprincipal');
Route::view('/listadoContactos', 'listadoContactos')->name('rutalistadoContactos');
Route::view('/formularioContactos', 'formularioContactos')->name('rutaformularioContactos');

