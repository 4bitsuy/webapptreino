@extends('campus.layouts.app')

@section('content')
{!! Form::open(['route' => 'docente.guardarLista']) !!}
{{ Form::hidden('grado', $grado->gra_id) }}
{{ Form::hidden('modulo', $modulo->modu_id) }}
  <div class="" id="page-wrapper">
    <div id="page-inner">
      <div class="row">

        <h4 class="col-md-9">
          <i class="fa fa-graduation-cap"></i> {{ $grado->gra_descripcion }} - {{ $modulo->modu_nombre }}
        </h4>
        <div class="col-md-3">
            <i class="fa fa-calendar-o"></i> {{ Form::text('fch_clase', null, ['class'       => 'form-control datepicker',
                                                                               'id'          => 'fch_clase-datepicker',
                                                                               'placeholder' => 'fecha clase',
                                                                               'required'    => 'required']) }}
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            LISTA DE ALUMNOS

          </div>

          <div class="panel-body">


              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th></th><th>Nro. Lista</th><th>Alumno</th><th>Documento</th><th class="bg-success">Asiste</th><th class="bg-warning">Justificada</th><th class="bg-danger">No Asiste</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($alumnosLista as $alumnoLista)
                      <tr>
                        <td><i class="fa fa-user-circle"></i></td>
                        <td>{{ array_get($alumnoLista, 'aluNroLista') }}</td>
                        <td>{{ array_get($alumnoLista, 'aluNom') }} {{ array_get($alumnoLista, 'aluApe') }}</td>
                        <td>{{ array_get($alumnoLista, 'aluCI') }}</td>

                        <td class="bg-success">{{ Form::checkbox('asiste[]', array_get($alumnoLista, 'alumnoId')) }}</td>
                        <td class="bg-danger">{{ Form::checkbox('noAsiste[]', array_get($alumnoLista, 'alumnoId')) }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              {{ Form::submit('Guardar', ['class' => 'btn btn-primary pull-right']) }}


          </div>
        </div>

      </div>
    </div>
  </div>
{!! Form::close() !!}
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
