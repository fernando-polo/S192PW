<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorFormulario;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('principal');
    }

    public function formularioContacto(){
        return view('formularioContacto');  
    }

    public function listadoContactos(){
        return view('listadoContactos');
    }


    public function procesarCliente(validadorFormulario $peticionValidada){

        // Redireción con valores en session
        $usuario = $peticionValidada->input('nombre');
    
        return to_route('rutaformularioContacto');
       }

}
