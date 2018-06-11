@extends('campus.layouts.app')

@section('content')

  <div class="" id="page-wrapper">
    <div class="panel-back-dash">
      <div class="row">
        <div class="col-md-12">

              @foreach ($datos_cursos as $datos_curso)
                <div class="col-md-6">
                    <div id="{!! array_get($datos_curso,'dicta_id') !!}" class="panel panel-default panel-default-dash ">
                      <div class="panel-heading dash-heading">{!! array_get($datos_curso,'titulo') !!}</div> <!-- Fin panel-heading -->
                      <div class="panel-body ">
                        <div class="col-md-3">
                          <input class="knob" data-fgColor="red" data-width="100%" readonly value="{!!  array_get($datos_curso,'porcentaje_curso')  !!}">
                        </div> <!-- Fin col-md-3 -->
                        <div class="col-md-9">
                          <p class="text-justify">{!! array_get($datos_curso,'descripcion') !!}</p>
                        </div><!-- Fin col-md-9 -->
                        <div class="pull-right">
                          <a id="{!! array_get($datos_curso,'dicta_id') !!}" href="{{route('cursos.curso',array_get($datos_curso,'dicta_id'))}}" class="btn bttn-fill bttn-sm bttn-primary bttn-no-outline">Ver Curso</a>
                          <!--<button class="bttn-fill bttn-sm bttn-primary bttn-no-outline">Ver Curso</button> -->
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach

          </div>

      </div>
    </div>
  </div>
@endsection
