@extends('layouts.app')

@section('title', 'BLOG')

@section('content')
  <article class="container-fluid nota">
    <div class="encabezado">
      <h2>{!! array_get($entrada, 'titulo') !!}</h2>
      <p class="container hour"><i class="fa fa-clock-o"></i> {!! array_get($entrada, 'fecha') !!}</p>
    </div>


    <div class="container">
      {!! array_get($entrada, 'contenido') !!}
    </div>
    <div class="container back">
      <a href="{{ URL::previous() }}"><i class="fa fa-arrow-left"></i> Volver</a>
    </div>
  </article>


@endsection

@section('pie')
  <div class="container noticias relacionadas">
    <h4>RELACIONADAS</h4>
    @foreach ($noticias as $noticia)
      <article class="col-md-4 noticia" id="{!! array_get($noticia, 'url') !!}">
        <a href="{!! array_get($noticia, 'url') !!}" class="fondo">
          <img src="{!! array_get($noticia, 'imagen') !!}" alt="" class="img-responsive">
        </a>
        <div class="info-noticia">
          <a href="{!! array_get($noticia, 'url') !!}">
            <h3>{!! array_get($noticia, 'titulo') !!}</h3>
          </a>
        </div>
      </article>
    @endforeach
  </div>

@endsection
