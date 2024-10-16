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
        // return $peticion->all();

        // la ruta donde se hizo la petición
        // return $peticion->path();

        // devuelve la ruta completa de la petición
        // return $peticion->url();

        // nos devuleve la ip del localhost
        // return $peticion->ip();


    }
}
