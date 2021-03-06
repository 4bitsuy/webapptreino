@extends('campus.layouts.app')

@section('content')


<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in {!! Session::get('usuName') !!}!
                    </div>

                    <a href="{{ route('grado.index') }}">CURSOS</a>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
