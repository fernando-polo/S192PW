@extends('layouts.plantilla1')

@section('titulo', 'clientes')

@section('contenido')
  {{-- Inicia tarjetaCliente --}}
  <div class="container mt-5 col-md-8">

    @foreach ($ConsultarClientes as $cliente)
        
    
      <div class="card text-justify font-monospace mt-3">

        <div class="card-header fs-5 text-primary">
          {{$cliente -> nombre}}
        </div>

        <div class="card-body">
          <h5 class="fw-bold">{{$cliente -> correo}}</h5>
          <h5 class="fw-medium">{{$cliente -> telefono}}</h5>
          <p class="card-text fw-lighter"></p>
        </div>

        <div class="card-footer text-muted">
          <a href="{{route('rutaclientesUpdate')}}" class="btn btn-warning btn-sm" type="submit">{{__('Actualizar')}}</a>
          <button type="submit" class="btn btn-danger btn-sm">{{__('Eliminar')}}</button>

        </div>

      </div>
    @endforeach
    {{-- Finaliza tarjetaCliente --}}

  </div>{{-- divcontainer --}}
@endsection