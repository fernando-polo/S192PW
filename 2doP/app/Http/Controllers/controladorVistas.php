<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorPeticiones;

class controladorVistas extends Controller
{
    public function formulario(){
        return view('formUsuarios');
    }

    public function procesarPeticion(validadorPeticiones $peticionValidada){

        $usuario = $peticionValidada->input('txtnombre');

        session()->flash('exito', $usuario);
    
        return to_route('rutaform');

    }
}
