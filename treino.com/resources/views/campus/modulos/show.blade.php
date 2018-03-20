@extends('campus.layouts.app')

@section('content')

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">VER MODULO
            <a href="{{ URL::previous() }}" class="btn btn-sm btn-primary pull-right" title="volver">
              <i class="fa fa-chevron-circle-left"></i>
            </a>
          </div>

          <div class="panel-body form-wrap">
            <div class="form-group">
              <div class="col-md-12">
                <p><strong>Nombre</strong> {{ $modulo->modu_nombre }}</p>
              </div>
              <div class="col-md-6">
                <p><strong>Descripción</strong> {{ $modulo->modu_descripcion }}</p>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                <p>
                  <strong>Cursos</strong>
                    
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
