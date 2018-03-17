@extends('campus.layouts.app')

@section('content')

  <div class="" id="page-wrapper">
    <div id="page-inner">
      <div class="row">
        <div class="container">
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <div class="panel panel-default">
                      <div class="panel-heading">Dashboard</div>

                      <div class="panel-body">
                          @foreach ($datos_cursos as $datos_curso)
                            @foreach ($datos_curso as $key => $value)
                              {!! $key !!} - {!! $value !!}
                              <br>
                            @endforeach
                          @endforeach
                        DASHBOARD ALUMNO
                      </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
