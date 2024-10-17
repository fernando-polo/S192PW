<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>repaso1</title>
</head>
<body>


        <div class="container mt-5">
            <h2 class="text-center">Conversor de Unidades</h2>
            <form id="convertir-form" action="{{route('rutaConvertir')}}" method="POST">
                @csrf
                <div class="row mt-5">
                    <div class="col-6 mb-3 text-center">
                        <label for="valor" class="form-label"><strong>Cantidad</strong></label>
                        <input type="number" class="form-control" id="valor" name="valor" required placeholder="Números">
                    </div>
                    <div class="col-6 mb-3 text-center">
                        <label for="unidad" class="form-label"><strong>Conversión</strong></label>
                        <select class="form-select" id="unidad" name="unidad" required>
                            <option value="mb-gb">MB a GB</option>
                            <option value="gb-mb">GB a MB</option>
                            <option value="gb-tb">GB a TB</option>
                            <option value="tb-gb">TB a GB</option>
                        </select>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Convertir</button>
                </div>
            </form>

              <!-- Mostrar el resultado si existe -->
            @if (isset($resultado))
            <div class="mt-3 text-center">
                <h4>Resultado:</h4>
                <p>{{ $resultado }}</p>
            </div>
            @endif
        </div>
        
</body>
</html>