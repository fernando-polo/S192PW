<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/fondo.css')}}">
    <title> @yield('titulo') </title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('rutainicio')}}">Turista Sin Maps</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('rutaform')}}">Registro de clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('rutaclientes')}}">Consultar clientes</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @yield('contenido')
</body>
</html>