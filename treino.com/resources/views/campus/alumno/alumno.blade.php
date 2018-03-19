@extends('campus.layouts.app')

@section('content')

  <div class="" id="page-wrapper">
    <div id="page-inner">
      <div class="row">
        <div class="col-md-12">
              @foreach ($datos_cursos as $datos_curso)
                  @foreach ($datos_curso as $key => $value)
                    @if ($key == 'modu_nombre')
                      <div class="col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading">{!! $value !!}</div>
                          <div class="panel-body">
                            <div class="col-md-3">
                              <input class="knob" data-fgColor="red" data-width="100%" readonly value="22">
                            </div> <!-- Fin col-md-3 -->
                            <div class="col-md-9">
                    @else
                        @if ($key == 'gra_descripcion')
                                {!! $value !!}
                        @endif
                    @endif
                  @endforeach
                            </div> <!-- Fin col-md-9 -->
                          </div> <!-- Fin panel-body -->
                        </div> <!-- Fin panel panel-default -->
                      </div> <!-- Fin col-md-6 -->
              @endforeach
          </div>
      </div>
    </div>
  </div>
@endsection
