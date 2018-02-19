@extends('layouts.app')

@section('title', 'BLOG')

@section('content')
  <div class="container-fluid noticias">
    @foreach ($noticias as $noticia)
      <article class="col-md-4 noticia" id="{!! array_get($noticia, 'url') !!}">
        <a href="blog/{!! array_get($noticia, 'url') !!}" class="fondo">
          <img src="{!! array_get($noticia, 'imagen') !!}" alt="" class="img-responsive">
        </a>
        <div class="info-noticia">
          <a href="blog/{!! array_get($noticia, 'url') !!}">
            <h3>{!! array_get($noticia, 'titulo') !!}</h3>
            <h5>{!! array_get($noticia, 'categoria') !!}</h5>
          </a>
        </div>
      </article>
    @endforeach
  </div>
@endsection

@section('pie')
@endsection
