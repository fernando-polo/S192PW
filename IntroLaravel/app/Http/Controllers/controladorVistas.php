<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function formulario(){
        return view('formulario');

    }

    public function consulta(){
        return view('clientes');    
    }

    public function procesarCliente(Request $peticion){
        // return 'La información del cliente llego al controlador';
        return $peticion->all();

    }
}
