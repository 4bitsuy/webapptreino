@extends('campus.layouts.app')

@section('content')

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">CURSOS</div>

          <div class="panel-body">
            <a href="{{ route('grado.create') }}"><i class="fa fa-plus-circle"></i> Agregar curso</a>
            <div class="table-responsive">
              <table class="table table-hover">
                  <tr>
                    <th>Curso</th><th>Año</th><th>Fecha inicio</th><th>Fecha fin</th><th></th><th></th>
                  </tr>
                @foreach ($grados as $grado)
                  <tr>
                    <td>{{$grado->gra_descripcion}}</td>
                    <td>{{$grado->gra_nro}}</td>
                    <td>{{$grado->gra_fch_ini}}</td>
                    <td>{{$grado->gra_fch_fin}}</td>
                    <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                  </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
