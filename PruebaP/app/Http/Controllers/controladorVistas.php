<?php


namespace App\Http\Controllers;

use App\Http\Requests\validadorUsuarios;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function form(){
        return view ('formUsuarios');
    }

    public function procesarUsuario(validadorUsuarios $peticionValidada){
        
        $usuario = $peticionValidada->input('txtCorreo');

        session()->flash('exito', $usuario );

        return to_route('rutaForm');
    }


}
