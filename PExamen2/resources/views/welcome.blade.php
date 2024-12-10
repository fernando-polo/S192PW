@extends('layouts.plantilla1')

@section('content')
    {{--     
        Permisos MAC para Bootstrap
            sudo chown -R fernandogomez:staff /Users/fernandogomez/Herd/S192PW/PRUEBA2
            chmod -R 775 /Users/fernandogomez/Herd/S192PW/PRUEBA2

            rm -rf node_modules package-lock.json                                     
            npm cache clean --force                              
            npm install

            En el app.js:
            import 'bootstrap/dist/css/bootstrap.min.css';
            import 'bootstrap/dist/js/bootstrap.bundle.min.js';

        Instalar Bootstrap
            npm i -D bootstrap @popperjs/core sass

            En el app.js:
            import 'bootstrap/dist/css/bootstrap.min.css';
            import 'bootstrap/dist/js/bootstrap.bundle.min.js';

    --}}

    <x-card>
        <x-slot name="contenido">
            Hola mundo
        </x-slot>
    </x-card>
    
@endsection