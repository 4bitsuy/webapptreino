@extends('campus.layouts.app')

@section('content')

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">Cambiar contraseña</div>

              <div class="panel-body">
                  {!! Form::open(['route' => 'cambioPass']) !!}

                    <div class="form-group">
                      {{ Form::label('clave_actual', 'Clave Actual') }}
                      {!! Form::password('clave_actual', [
                        'id' => 'clave_actual',
                        'placeholder' => 'Clave Actual',
                        'class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                      {{ Form::label('clave', 'Nueva Clave') }}
                      {!! Form::password('clave', [
                        'class' => 'form-control',
                        'id' => 'clave',
                        'placeholder' => 'Clave']) !!}
                    </div>
                    <div class="form-group">
                      {{ Form::label('clave_confirmation', 'Repetir Clave') }}
                      {!! Form::password('clave_confirmation', [
                        'class' => 'form-control',
                        'id' => 'repetir_clave',
                        'placeholder' => 'Repetir']) !!}
                    </div>

                    <div class="form-group">
                      {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
                    </div>
                  {!! Form::close() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
