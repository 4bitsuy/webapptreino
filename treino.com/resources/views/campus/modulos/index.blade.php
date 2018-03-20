@extends('campus.layouts.app')

@section('content')

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            LISTA DE MODULOS
            <a href="{{ route('modulo.create') }}" class="btn btn-sm btn-primary pull-right">
              <i class="fa fa-plus-circle"></i> Agregar
            </a>
          </div>

          <div class="panel-body">

            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Nombre</th><th>Descripcion</th><th></th><th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($modulos as $modulo)
                    <tr>
                      <td>{{ $modulo->modu_nombre }}</td>
                      <td>{{ $modulo->modu_descripcion }}</td>
                      <td>
                        <a href="{{ route('modulo.show', $modulo->modu_id) }}">
                          <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                      </td>
                      <td>
                        <a href="{{ route('modulo.edit', $modulo->modu_id) }}">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                      </td>
                      <td>
                        {!! Form::open(['route' => ['modulo.destroy', $modulo->modu_id], 'method' => 'delete']) !!}
                          <button type="button" name="button" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        {!! Form::close() !!}
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            {{ $modulos->render() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
