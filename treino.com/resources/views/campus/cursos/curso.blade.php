@extends('campus.layouts.app')

@section('content')

  <div class="" id="page-wrapper">
    <div class="panel-back-dash">
      <div class="row">
        <div class="col-md-12">
          <div class="">
            <h2 class="text-left" id="tit_curso">{{array_get($ColTemasCurso, 'Modulo_titulo')}}</h2>
              @if (Session::get('usuRol') == 'docente')
                <a class="btn bttn-minimal bttn-sm bttn-success" href="{{route('docente.lista', [$idGrado, $idModulo])}}">Pasar lista</a>
                <a class="btn bttn-minimal bttn-sm bttn-warning" href="{{route('docente.verFechaLista', [$idGrado, $idModulo])}}">Ver lista</a>
              @endif
          </div>
          <p>
            <span id="subtit_curso"><strong><u>Sobre este curso  </u></strong></span>
          </p>

          <div class="well well-custom">{!! array_get($ColTemasCurso, 'Modulo_descripcion')!!}</div>

          <div class="linea-gradiente"></div> <!-- SEPARADOOORRRRRRR  -->

          @foreach ($ColTemasCurso['Modulo_Temas'] as $itemTema)
            <div class="table-responsive" style="width:90%;">
              <table class="table">
                  <tr>
                    <td>
                      <h4><strong>{{ $itemTema->tema_nombre }}</strong></h4></td>
                    <td style="width:50px;">

                      @if (Session::get('usuRol') == 'docente')

                        <a href="#" id="archivo_modal" data-id="{!! $itemTema->tema_id !!}" class='curso_archivo_modal' data-toggle="modal" data-nombre="{{$itemTema->tema_nombre}}" data-target="#AddArchivosCurso">
                          <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                        </a>
                      @endif

                    </td>
                  </tr>
                </table>
            </div>

            @foreach ($ColTemasCurso['Modulo_Archivos'] as $itemArchivos)
              @if ($itemTema->tema_id == array_get($itemArchivos, 'tema_id'))

                <div class="row">
                  <div class="col-md-1" style="width:20px;"></div>
                  <div class="col-md-11">
                    <p style="width:70%;">{{ $itemTema->tema_descripcion}}</p>

                    @foreach ($itemArchivos['archivos'] as $archivo)
                      <div class="table-responsive" style="width:95%;">
                        <table class="table">
                          <tr>

                            <td>
                              <img src="{{ URL::asset('images/btn_PDF.png') }}" alt="pdf_download" class="img-rounded img-curso-material"><a href="{{ route('descargar', $archivo->arch_ruta) }}">{{ $archivo->arch_nombre}}</a></td>

                            @if (Session::get('usuRol') == 'docente')
                              <td style="width:40px;">
                                <a href="#">
                                  <i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
                                </a>
                              </td>
                              <td style="width:40px;">
                                <button type="button" name="button" class="btn btn-sm btn-danger"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                              </td>
                            @endif <!-- FIN - (Session::get('usuRol') == 'docente') -->

                          </tr>
                        </table>
                      </div>
                    @endforeach <!-- FIN - ($itemArchivos['archivos'] as $archivo) -->

                  </div>
                </div>

                <div style="margin-bottom:15px; margin-top:25px;">
                  <div class="linea-gradiente"></div>
                </div>

              @endif <!-- FIN - ($itemTema->tema_id == array_get($itemArchivos, 'tema_id')) -->
            @endforeach <!-- FIN - ($ColTemasCurso['Modulo_Archivos'] as $itemArchivos) -->

          @endforeach <!-- FIN - ($ColTemasCurso['Modulo_Temas'] as $itemTema) -->

        </div>
      </div>

      @include('campus.archivos.create')

      @section('scripts')

        <script type="text/javascript">
          $( ".curso_archivo_modal" ).click(function() {
              var temaId = $(this).data('id');
              var temaNombre = $(this).data('nombre');
              var input = document.getElementById("tema_id");
              var span = document.getElementById("tema_nombre");
              input.value = temaId;
              span.innerHTML = temaNombre;
          }) ;
        </script>
      @EndSection
    </div>

  </div>

@endsection                                                                                                                                                                                                                                                           
