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
                            <h4>{{ $datos_curso->gra_id }}</h4>
                            <h4>{{ $datos_curso->modu_id }}</h4>
                            <h4>{{ $datos_curso->alu_id }}</h4>
                            <h4>{{ $datos_curso->cur_estado }}</h4>
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
