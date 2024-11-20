@extends('layouts.plantilla1')

@section('titulo', 'Formulario')

@section('contenido')   
  {{-- Inicia tarjeta con formulario --}}


  <div class="container mt-5 col-md-6">

    {{-- Valida si existe la clase sesión y ejecuta el if, dos formas diferentes: --}}
    
      {{-- @if (session('exito'))
      <x-Alert tipo="success">{{ session('exito') }}</x-Alert>
      @endif

      @session ('exito')
      <x-Alert tipo="danger">{{ $value }}</x-Alert>
      @endsession --}}

      @session ('exito')
        <script>
            Swal.fire({
              text: "Se guardó el usuario: {{$value}}",
              icon: "success"
          });
        </script>
      @endsession

    <div class="card font-monospace">
      <div class="card-header fs-5 text-center text-primary">
        {{__('Registro de Clientes')}}
      </div>
  
      <div class="card-body text-justify">
        <form action="{{ route('enviaCliente') }}" method="POST">

          @csrf
      
          <div class="mb-3">
            <label for="nombre" class="form-label">{{__('Nombre: ')}}</label>
            <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre') }}">
            <small class="first-italic text-danger">{{ $errors->first('txtnombre') }}</small>
          </div>
          <div class="mb-3">
            <label for="apellido" class="form-label">{{__('Apellido: ')}}</label>
            <input type="text" class="form-control" name="txtapellido" value="{{ old('txtapellido') }}">
            <small class="first-italic text-danger">{{ $errors->first('txtapellido') }}</small>
          </div>
          <div class="mb-3">
            <label for="correo" class="form-label">{{__('Correo: ')}}</label>
            <input type="text" class="form-control" name="txtcorreo">
            <small class="first-italic text-danger">{{ $errors->first('txtcorreo') }}</small>
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">{{__('Teléfono: ')}}</label>
            <input type="text" class="form-control" name="txttelefono">
            <small class="first-italic text-danger">{{ $errors->first('txttelefono') }}</small>
          </div>
          <div class="card-footer text-muted">
            <div class="d-grid gap-2 mt-2 mb-1">
              <button type="submit" class="btn btn-success btn-sm"> {{__('Actualizar cliente')}} </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
   {{-- divcontainer --}}
{{-- Finaliza Tarjeta con formulario --}}
@endsection