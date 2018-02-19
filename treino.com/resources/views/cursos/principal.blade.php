@extends('layouts.app')

@section('title', 'CURSOS')

@section('content')
    <h2 class="not-home">NUESTROS CURSOS</h2>
    <div id="cursos" class="container-fluid cursos">
      @foreach ($cursos as $curso)
        @foreach ($curso as $key => $value)
          @if ($key == 'id')
            <div class="col-xs-6 col-lg-3 fondo-curso" id="{!! $value !!}">
              <div class="background-curso">

              </div>
          @endif
          @if ($key == 'titulo')
              <h4>{!! $value !!}</h4>
          @else
            @if ($key == 'imagen')
                <img src="{!! $value !!}" alt="" class="img-responsive">
              </div>
            @endif
          @endif
        @endforeach
      @endforeach
    </div>
    <section id="datos-cursos" class="container-fluid data-cursos">
      <div class="col-lg-12 noSel">
        <p class="uno">NO HAS SELECCIONADO NINGÚN CURSO</p>
        <p class="dos">(Seleccioná una opción de arriba)</p>
      </div>
    </section>

    <div class="promociones container-fluid">
      <div class="col-sm-2 col-sm-offset-1">
        <h4>¡Promociones!</h4>
      </div>
      <div class="col-sm-2">
        <p>
          <i class="fa fa-check-square-o"></i>
          Costo anual abonando Contado 20% OFF
        </p>
      </div>
      <div class="col-sm-2">
        <p>
          <i class="fa fa-check-square-o"></i>
          Residentes en el interior 20% OFF mensual (desde 100km distancia)
        </p>
      </div>
      <div class="col-sm-2">
        <p>
          <i class="fa fa-check-square-o"></i>
          PROMO YO + 1 (Inscribite con un amigo y abonan con 15% OFF mensual)
        </p>
      </div>
      <div class="col-sm-2">
        <p>
          <i class="fa fa-check-square-o"></i>
          Alumnos TREINO 10% OFF
        </p>
      </div>
    </div>
@endsection

@section('pie')
  @include('contacto.form-cursos', ['cursos' => $cursos])
@endsection
