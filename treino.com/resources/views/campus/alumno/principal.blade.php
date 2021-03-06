@extends('campus.layouts.app')

@section('content')

  <div class="" id="page-wrapper">
    <div class="panel-back-dash">
      <div class="row">
        <div class="col-md-12">
              @foreach ($datos_cursos as $datos_curso)
                <div class="col-md-6">
                  @foreach ($datos_curso as $key => $value)
                    @if ($key == 'cur_id')
                      <?php $id_curso = $value; ?>
                    @endif

                          @if ($key == 'titulo')
                            <div id="{!! $id_curso !!}" class="panel panel-default panel-default-dash ">
                              <div class="panel-heading dash-heading">{!! $value !!}</div> <!-- Fin panel-heading -->
                                <div class="panel-body ">
                          @elseif ($key == 'porcentaje_curso')
                                  <div class="col-md-3">
                                    <input class="knob" data-fgColor="red" data-width="100%" readonly value="{!! $value !!}">
                                  </div> <!-- Fin col-md-3 -->
                          @elseif ($key == 'descripcion')
                                  <div class="col-md-9">
                                    <p class="text-justify">{!! $value !!}</p>
                                  </div><!-- Fin col-md-9 -->
                                  <div class="pull-right">
                                    <a id="{!! $id_curso !!}" href="{{ route('cursos.curso',$id_curso) }}" class="btn bttn-fill bttn-sm bttn-primary bttn-no-outline">Ver Curso</a>
                                    <!--<button class="bttn-fill bttn-sm bttn-primary bttn-no-outline">Ver Curso</button> -->
                                  </div>
                                </div><!-- Fin panel-body -->
                          @endif

                  @endforeach

                            </div> <!-- Fin panel panel-default -->
                </div> <!-- Fin col-md-6 -->

              @endforeach
          </div>
      </div>
    </div>
  </div>
@endsection
