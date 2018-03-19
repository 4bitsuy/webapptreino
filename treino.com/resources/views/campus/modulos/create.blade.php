@extends('campus.layouts.app')

@section('content')

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">NUEVO MODULO
            <a href="{{ URL::previous() }}" class="btn btn-sm btn-primary pull-right" title="volver">
              <i class="fa fa-chevron-circle-left"></i>
            </a>
          </div>

          <div class="panel-body form-wrap">
            {!! Form::open(['route' => 'modulo.store']) !!}

              @include('campus.modulos.partials.form')

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
