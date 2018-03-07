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
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
