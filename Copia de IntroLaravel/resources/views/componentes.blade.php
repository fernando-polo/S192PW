{{-- Heredar la plantilla 1 --}}
@extends('layouts.plantilla1')

{{-- Dinamismo en el nombre de los titulos de las vistas --}}
@section('titulo', 'Componentes')

{{-- Dividir el contenido por secciones --}}
@section('contenido')

{{-- sintaxis para usar el componente -usando los valores del card.blade--}}
<x-Card encabezado="Componente " titulo="Dinamico" textoBoton="Enviar">
    Texto del primer componente
</x-Card>

<x-Card encabezado="Componente 2" titulo="Dinamico 2" textoBoton="Enviar 2">
    Texto del segundo componente
</x-Card>

<x-Alert tipo="success">Verde </x-Alert>
<x-Alert tipo="primary">Azul </x-Alert>
<x-Alert tipo="danger">Rojo </x-Alert>

@endsection