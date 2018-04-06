@extends('campus.layouts.app')

@section('content')


  {{ Form::hidden('grado', $grado->gra_id) }}
    <div class="" id="page-wrapper">
      <div id="page-inner">
        <div class="row">

          <h4 class="col-md-4">
            <i class="fa fa-graduation-cap"></i> {{ $grado->gra_descripcion }}
          </h4>
          

          {{ Form::submit('Ver', ['class' => 'btn btn-primary pull-right']) }}


            </div>
          </div>

        </div>
      </div>
    </div>
  @endsection
