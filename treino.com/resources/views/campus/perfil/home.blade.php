@extends('campus.layouts.app')

@section('content')

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
             <h2>Perfil General</h2>
                <h5>{{ $persona->per_pri_nombre }} {{$persona->per_pri_apellido}}</h5>
            </div>

            <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel panel-heading">
                          Datos personales
                      </div>
                      <div class="panel panel-body">
                        <div class="col-md-12">
                          <p>DOCUMENTO <strong> {{$persona->per_ci}}</strong></p>
                        </div>
                        <div class="col-md-6">
                          <p>NOMBRE <strong> {{$persona->per_pri_nombre}} {{$persona->per_seg_nombre}}</strong></p>
                        </div>
                        <div class="col-md-6">
                          <p>APELLIDO <strong> {{$persona->per_pri_apellido}} {{$persona->per_seg_apellido}}</strong></p>
                        </div>
                        <div class="col-md-4">
                          <p>FECHA NACIMIENTO <strong> {{$persona->per_fechanac}}</strong></p>
                        </div>
                        <div class="col-md-8">
                          <p>CORREO <strong> {{$persona->per_email}}</strong></p>
                        </div>
                      </div>
                  </div>

              </div>

            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel panel-heading">
                          Datos usuario
                      </div>
                      <div class="panel panel-body">
                        <div class="col-md-6">
                          <p>USUARIO ACCESO <strong> {{$user->email}}</strong></p>
                        </div>
                        <div class="col-md-6">
                          <p>CONTRASEÑA <strong> ******</strong></p>
                        </div>
                        <div class="col-md-6">
                          <p>ROL <strong> {{$rol->descripcion}}</strong></p>
                        </div>
                      </div>
                  </div>

              </div>

            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
