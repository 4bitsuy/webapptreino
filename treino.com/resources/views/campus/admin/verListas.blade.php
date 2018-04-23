@extends('campus.layouts.app')

@section('content')


  {{ Form::hidden('grado', $grado->gra_id) }}
    <div class="" id="page-wrapper">
      <div id="page-inner">
        <div class="row">

          <a href="{{ route('docente.lista', $grado->gra_id) }}" class="btn btn-sm btn-primary pull-right">
            <i class="fa fa-plus-circle"></i> Agregar
          </a>

          <h4 class="col-md-4">
            <i class="fa fa-graduation-cap"></i> {{ $grado->gra_descripcion }}
          </h4>

          @foreach ($listas as $lisfecha)
            <a href = {{  }} >{{$lisfecha}}</a>
          @endforeach

        </div>
      </div>
    </div>
  @endsection
