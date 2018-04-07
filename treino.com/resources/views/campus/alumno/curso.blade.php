@extends('campus.layouts.app')

@section('content')

  <div class="" id="page-wrapper">
    <div class="panel-back-dash">
      <div class="row">
        <div class="col-md-12">
          @foreach ($ColTemasCurso as $itemTemasCurso)
            <div class="col-md-12">

              <?php  dd( $itemTemasCurso); ?>
              @foreach ($itemTemasCurso as $key => $value)
                  @if ($key == 'Modulo_titulo')
                    <div class="panel panel-default">
                      <div class="panel-heading">{!! $value !!}
                      </div>
                    </div>
                  @endif

              @endforeach
            </div>
          @endforeach

          </div>
      </div>
    </div>
  </div>
@endsection
