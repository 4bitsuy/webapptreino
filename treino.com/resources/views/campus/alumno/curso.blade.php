@extends('campus.layouts.app')

@section('content')

  <div class="" id="page-wrapper">
    <div class="panel-back-dash">
      <div class="row">
        <div class="col-md-12">

          <h2 id="tit_curso">{{array_get($ColTemasCurso, 'Modulo_titulo')}}</h2>


          <p>
            <span id="subtit_curso"><strong><u>Sobre este curso  </u></strong></span>
            </p>
            <div class="well well-custom">{!! array_get($ColTemasCurso, 'Modulo_descripcion')!!}</div>

            <div class="linea-gradiente"></div>
          @foreach ($ColTemasCurso['Modulo_Temas'] as $itemTema)
            <h4><strong>{{ $itemTema->tema_nombre }}</strong></h4>
            @foreach ($ColTemasCurso['Modulo_Archivos'] as $itemArchivos)
              @if ($itemTema->tema_id == array_get($itemArchivos, 'tema_id'))
                <p style="width:70%";>{{ $itemTema->tema_descripcion}}</p>
                @foreach ($itemArchivos['archivos'] as $archivo)
                  <img src="{{ URL::asset('images/btn_PDF.png') }}" alt="pdf_download" class="img-rounded img-curso-material"><a href="{{ route('descargar', $archivo) }}"> DESCARGA PDF</a>
                @endforeach
                <div style="margin-bottom:15px; margin-top:25px;">
                <div class="linea-gradiente"></div>
                </div>
              @endif
            @endforeach
          @endforeach

        </div>
      </div>
    </div>
  </div>
@endsection                                                                                                                                                                                                                                                           
