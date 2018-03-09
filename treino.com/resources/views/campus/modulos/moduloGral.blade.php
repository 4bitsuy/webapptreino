@extends('campus.layouts.app')

@section('content')

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">MODULOS</div>

          <div class="panel-body">
            <a href="{{ route('modulo.create') }}"><i class="fa fa-plus-circle"></i> Agregar modulo</a>
            <div class="table-responsive">
              <table class="table table-hover">
                  <tr>
                    <th>Nombre</th><th>Descripcion</th><th></th><th></th>
                  </tr>

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
