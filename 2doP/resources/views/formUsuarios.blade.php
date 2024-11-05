<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    @session ('exito')
        <script>
            Swal.fire({
            title: "Respuesta Servidor!",
            text: "Se guardó el usuario: {{$value}}",
            icon: "success"
        });
        </script>
  @endsession

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">

            <form action="/RegistrarPeticion"  method="post">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" class="form-control" name="txtnombre" >
                    <small class="first-italic text-danger">{{ $errors->first('txtnombre') }}</small>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo: </label>
                    <input type="text" class="form-control" name="txtcorreo" >
                    <small class="first-italic text-danger">{{ $errors->first('txtcorreo') }}</small>
                </div>
                <div class="mb-3">
                    <label for="contraseña" class="form-label">Contraseña: </label>
                    <input type="text" class="form-control" name="txtcontraseña">
                    <small class="first-italic text-danger">{{ $errors->first('txtcontraseña') }}</small>
                </div>
                <div class="mb-3">
                    <label for="edad" class="form-label">Edad: </label>
                    <input type="text" class="form-control" name="txtedad" >
                    <small class="first-italic text-danger">{{ $errors->first('txtedad') }}</small>
                </div>
                    
                <button type="submit" class="btn btn-danger "> Guardar Usuario</button>
            </form>
    </div>
        

</body>
</html>