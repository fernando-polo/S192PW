<div class="container mt-4">
    {{-- Componentes dinámicos en los cuales se usan los atributos definidos --}}
    <div class="card">
        <div class="card-header">
            {{-- Encabezado dinámico --}}
            {{ $encabezado }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $titulo }}</h5>
            {{-- slot es un atributo propio que ya viene por default --}}
            <p class="card-text">{{$slot}}</p> 
            <a href="#" class="btn btn-primary">{{ $textoBoton }}</a>
        </div>
    </div>
</div>