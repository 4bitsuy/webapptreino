@extends('campus.layouts.app')

@section('content')

  <div class="" id="page-wrapper">
    <div id="page-inner">
      <div class="row">
        <div class="col-md-12">
              @foreach ($datos_cursos as $datos_curso)
                  @foreach ($datos_curso as $key => $value)
                      @if ($key == 'tema_es_cur_corto')
                          @if ($value == 'true') <!-- Si es un curso corto -->
                            dd(rs - 1,{!!$value !!});
                            @if ($key == 'tema_nombre')
                              <div class="col-md-6">
                                <div class="panel panel-default">
                                  <div class="panel-heading">{!! $value !!}</div>
                                  <div class="panel-body">
                                    <div class="col-md-3">
                                      @if ($key == 'porcentaje_curso')
                                        <input class="knob" data-fgColor="red" data-width="100%" readonly value={!! $value !!}>
                                      @endif
                                    </div> <!-- Fin col-md-3 -->
                            @endif

                          @else <!-- SI NO  es un curso corto -->
                            dd(rs - 2);
                            @if ($key == 'modu_nombre')
                              dd(rs - 3);
                              <div class="col-md-6">
                                <div class="panel panel-default">
                                  <div class="panel-heading">{!! $value !!}</div>
                                  <div class="panel-body">
                                    <div class="col-md-3">
                                      @if ($key == 'porcentaje_curso')
                                        <input class="knob" data-fgColor="red" data-width="100%" readonly value={!! $value !!}>
                                      @endif
                                    </div> <!-- Fin col-md-3 -->
                            @endif

                          @endif

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
