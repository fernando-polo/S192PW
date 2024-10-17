<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function repaso(){
        return view('repaso1');
    }

    public function convertir(Request $request)
    {
        $valor = $request->input('valor');
        $unidad = $request->input('unidad');

        $resultado = '';

        switch ($unidad) {
            case 'mb-gb':
                $resultado = $valor / 1024 . ' GB';
                break;
            case 'gb-mb':
                $resultado = $valor * 1024 . ' MB';
                break;
            case 'gb-tb':
                $resultado = $valor / 1024 . ' TB';
                break;
            case 'tb-gb':
                $resultado = $valor * 1024 . ' GB';
                break;
            default:
                $resultado = 'Unidad no válida';
                break;
        }
        
        return view('repaso1', ['resultado' => $resultado]);
    }

}
