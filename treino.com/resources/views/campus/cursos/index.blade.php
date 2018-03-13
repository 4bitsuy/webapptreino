@extends('campus.layouts.app')

@section('content')

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            LISTA DE CURSOS
            <a href="{{ route('grado.create') }}" class="btn btn-sm btn-primary pull-right">
              <i class="fa fa-plus-circle"></i> Agregar
            </a>
          </div>

          <div class="panel-body">

            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Curso</th><th>Año</th><th>Fecha inicio</th><th>Fecha fin</th><th></th><th></th><th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($grados as $grado)
                    <tr>
                      <td>{{$grado->gra_descripcion}}</td>
                      <td>{{$grado->gra_nro}}</td>
                      <td>{{$grado->gra_fch_ini}}</td>
                      <td>{{$grado->gra_fch_fin}}</td>
                      <td>
                        <a href="{{ route('grado.show', $grado->gra_id) }}">
                          <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                      </td>
                      <td>
                        <a href="{{ route('grado.edit', $grado->gra_id) }}">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                      </td>
                      <td>
                        {!! Form::open(['route' => ['grado.destroy', $grado->gra_id], 'method' => 'delete']) !!}
                          <button type="button" name="button" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        {!! Form::close() !!}
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            {{ $grados->render() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
