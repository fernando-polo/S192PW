@extends('layouts.plantilla1')

@section('titulo', 'clientes')

@section('contenido')
  {{-- Inicia tarjetaCliente --}}
  <div class="container mt-5 col-md-8">

    @foreach ($ConsultarClientes as $cliente)

    @session ('clienteActualizado')
      <script>
          Swal.fire({
            text: "Se actualizó exitosamente el usuario: {{$value}}",
            icon: "success"
        });
      </script>
    @endsession

    @session ('clienteEliminado')
    <script>
        Swal.fire({
          title: "Éxito",
          text: "Se elimino exitosamente el usuario",
          icon: "success"
      });
    </script>
  @endsession

    
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
          <div class="container">
            <div class="row text-left">
              <div class="col">

              {{-- botón de editar cliente --}}
              <a href="{{ route('rutaclientesUpdate', ['id' => $cliente->id]) }}" class="btn btn-warning btn-sm" type="submit">
                {{__('Actualizar')}}
              </a>
              </div>

              <div class="col">

                {{-- form para el botón eliminar cliente --}}
                <form id="eliminarUsuario{{ $cliente->id}}" action="{{ route('rutaeliminarCliente',  $cliente->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmarCliente({{$cliente->id}})">
                      {{__('Eliminar')}}
                    </button>
                </form>

              </div>



            </div>
          </div>

        </div>

      </div>
    @endforeach
    {{-- Finaliza tarjetaCliente --}}
  
    <script>
      function confirmarCliente(clienteid){
        Swal.fire({
        title: "Are you sure to make this changes?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById(`eliminarUsuario${clienteid}`).submit();
        }
      });
      }
    </script>
    
  </div>
@endsection