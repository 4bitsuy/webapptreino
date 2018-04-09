@extends('campus.layouts.app')

@section('content')

  <div class="" id="page-wrapper">
    <div class="panel-back-dash">
      <div class="row">
        <div class="col-md-12">

          <h3>{{array_get($ColTemasCurso, 'Modulo_titulo')}}</h3>
          <div>
            {!! array_get($ColTemasCurso, 'Modulo_descripcion')!!}
          </div>
          @foreach ($ColTemasCurso['Modulo_Temas'] as $itemTema)
            <h4>{{ $itemTema->tema_nombre }}</h4>
            @foreach ($ColTemasCurso['Modulo_Archivos'] as $itemArchivos)
              @if ($itemTema->tema_id == array_get($itemArchivos, 'tema_id'))
                @foreach ($itemArchivos['archivos'] as $archivo)
                  <a href="{{ route('descargar', $archivo) }}"> DESCARGA PDF</a>
                @endforeach
              @endif
            @endforeach
          @endforeach

        </div>
      </div>
    </div>
  </div>
@endsection                                                                                                                                                                                                                                                           
