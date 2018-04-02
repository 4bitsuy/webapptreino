@extends('campus.layouts.app')

@section('content')

  <div class="" id="page-wrapper">
    <div id="page-inner">
      <div class="row">

        <h4 class="col-md-9">
          <i class="fa fa-graduation-cap"></i> {{ $grado->gra_descripcion }} - {{ $modulo->modu_nombre }}
        </h4>
        <div class="col-md-3">
            <i class="fa fa-calendar-o"></i> {{ Form::text('fch_clase', null, ['class' => 'form-control datepicker', 'id' => 'fch_clase-datepicker', 'placeholder' => 'fecha clase']) }}
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            LISTA DE ALUMNOS

          </div>

          <div class="panel-body">
            {!! Form::open(['route' => 'docente.guardarLista']) !!}

              <div class="table-responsive">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th></th><th>Nro. Lista</th><th>Alumno</th><th>Documento</th><th>Asiste</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($alumnosLista as $alumnoLista)
                      <tr>
                        <td><i class="fa fa-user-circle"></i></td>
                        <td>{{ array_get($alumnoLista, 'aluNroLista') }}</td>
                        <td>{{ array_get($alumnoLista, 'aluNom') }} {{ array_get($alumnoLista, 'aluApe') }}</td>
                        <td>{{ array_get($alumnoLista, 'aluCI') }}</td>
                        <td>{{ Form::checkbox('asiste[]', array_get($alumnoLista, 'alumnoId')) }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              {{ Form::submit('Guardar', ['class' => 'btn btn-primary pull-right']) }}

            {!! Form::close() !!}
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection

@section('scripts')
  <script type="text/javascript">
  /** Date picker **/
  $(function () {
    $.datepicker.setDefaults($.datepicker.regional["es"]);
    $("#fch_clase-datepicker").datepicker({
      firstDay: 1,
    });
  });
  </script>
@endsection
