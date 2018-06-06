<?php $instas = json_decode($instagram); ?>
@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
@if ($tieneCursosCortos)
  <div class="cursos-cortos container-fluid">
    <h3>cursos <span>cortos</span></h3>

    <button type="button" name="button" id="mas-cursos" class="ver-mas"></button>
  </div>
  <div id="id-cursos-cortos" class="cursos">
      @foreach ($cursosCortos as $curso)
        <a href="#">
          <div
            @foreach ($curso as $key => $value)
              @if ($key == 'id')
                {!!"id = $value class='img-curso'"!!}
              @endif
              @if ($key == 'url-img')
                {!!" style = 'background: url($value) center center';>"!!}
              @endif
              @if ($key == 'tipo')
                <h4> {{$value}} </h4>
              @endif
              @if ($key == 'titulo')
                <h3> {{$value}} </h3>
              @endif
              @if ($key == 'fecha')
                <div class="info-curso">
                  <p> <strong>{{$value}} </strong></p>
              @endif
              @if ($key == 'descripcion')
                  <p> {{$value}} </p>
                </div>
              @endif
            @endforeach
          </div>
        </a>
      @endforeach
  </div>
@else
  <div class="inscripciones-abiertas">
    <h3 class="text-right">Inscripciones Abiertas <span>cursos 2018</span></h3>
  </div>
@endif
<div id="section-escuela" class="inicio container-fluid">
  <div class="container">
    <div class="col-lg-12">
      <h3>{!!array_get($homeData, 'home_1.titulo') !!}</h3>
      <p>{!! array_get($homeData, 'home_1.contenido') !!}</p>
      <a href="#" class="btn btn-contacto" data-toggle="modal" data-target="#section-contacto">CONTACTO / INSCRIPCIONES</a>
    </div>

    @for ($i = 2; $i <= 4; $i++)
      <div class="col-md-4">
        <img src="images/icon-{{$i-1}}.png" alt="" class="icono-home">
        <div class="cont-home">
          <h5>{!!array_get($homeData, 'home_'.$i.'.titulo') !!}</h5>
          <p>{!!array_get($homeData, 'home_'.$i.'.contenido') !!}</p>
        </div>
      </div>
    @endfor
  </div>
</div>

<div id="section-staff" class="staff">
  <div class="container">
    <div class="col-lg-12 text-center">
      <h3>NUESTRO STAFF</h3>
      <h5>Contamos con un equipo de reconocidos docentes</h5>

      <div id='staff-slide'>
        @for ($i = 1; $i <= 4; $i++)
          <div class="col-sm-4">
            <div class="one-person">
              {!! array_get($staffData, 'staff_'.$i.'.contenido') !!}
            </div>
            <h6>
              <span>{!!array_get($staffData, 'staff_'.$i.'.nombre') !!}</span> - {!!array_get($staffData, 'staff_'.$i.'.puesto') !!}
              <!--<img src="images/staff_{{$i}}.jpg" alt="" class="img-responsive img-staff">-->
            </h6>
          </div>
        @endfor
      </div>

    </div>
  </div>
</div>
<div class="inscripcion container-fluid hidden-xs">
  <div class="container">
    <h5>
      Pagá la inscripción a tus cursos de forma sencilla y online
      <a href="#" class="btn btn-inscribite"  data-toggle="modal" data-target="#section-inscripcion">En este sitio!</a>
    </h5>
  </div>
</div>
@endsection



@section('pie')
    <div class="instagram-profile col-sm-4 text-left ">
      <h4><img src="{{ URL::asset('images/instagram-logo.png') }}" alt="Instagram" class="img-responsive" style="max-width: 200px;"></h4>
      <div class="" id="instagram-feed">
        @foreach ($instas as $insta)
          <div class="insta-post">
            <img src="{{$insta->images->low_resolution->url}}" alt="" class="img-responsive">
            <i class="fa fa-heart" aria-hidden="true"></i> <span>{{ $insta->likes->count }}</span>
            <i class="fa fa-comment" aria-hidden="true"></i> <span>{{ $insta->comments->count }}</span>
            <div class="insta-info-post">
              <strong> <a href="https://www.instagram.com/treino.uy/" target="_blank">{{ $insta->user->username }} </a></strong><span>{{ $insta->caption->text }}</span>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="pie-cont col-sm-4 text-center">
      <img src="images/logo-pie.png" alt="" class="img-responsive img-logo-pie">
      <h3>Formá parte de nuestra escuela.</h3>
      <div class="block-social">
        <a href="https://www.facebook.com/treino.uy" target="_blank"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/treino.uy/" target="_blank"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
        <a href="https://twitter.com/treinouy" target="_blank"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
      </div>
    </div>
    <div class="pie-cont col-sm-4 text-center">
      <h4>NUESTROS ALUMNOS</h4>
      <div class="opiniones" id="opiniones">
        @foreach ($opiniones as $opinion)
          <div class="opinion">
            <p class="text-justify">"{!!array_get($opinion, 'opinion') !!}"</p>
            <h5>{!!array_get($opinion, 'alumno') !!}</h5>
            <h6>{!!array_get($opinion, 'curso') !!}</h6>
          </div>
        @endforeach
      </div>
    </div>

    @include('contacto.form-inscripciones')
@endsection

@section('scripts')
  <script type="text/javascript">
    $("#staff-slide").slick({
          dots: true,
          infinite: true,
          speed: 500,
          slidesToShow: 3,
          slidesToScroll: 1,
          adaptiveHeight: true,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });
  </script>
@endsection
