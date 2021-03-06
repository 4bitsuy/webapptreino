<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta id="token" name="token" content="{{ csrf_token() }}">

        <title>Treino - @yield('title')</title>

        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css') }}">

        <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/gif" sizes="16x16">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-79235043-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-79235043-1');
        </script>

    </head>
    <body class="institucional">
        @if (session('status'))
            <div class="alert alert-success msg">
              {!! array_get(session('status'), 'mail')  !!}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        @endif

        <header class="hidden-xs container-fluid nav-contact">
          <div class="container">
            <div class="phone"><span class="glyphicon glyphicon-earphone"></span> 099 989 141</div>
            <div class="mail"><span class="glyphicon glyphicon-envelope"></span> info@treino.com.uy</div>
          </div>
        </header>
        @include(config('laravel-menu.views.bootstrap-items'), ['items' => $NavBar->roots()])

        <section class="page">
            @yield('content')
        </section>

        <section class="pie container">
            @yield('pie')
        </section>

        <footer class="container-fluid">
          <div class="container">
            <span>Desarrollado por <a href="#"> <img src="{{ URL::asset('images/4bits.png') }}" alt="" class="img-copyright"></a></span>
          </div>
        </footer>

        @include('contacto.form')
        <script src="{{ URL::asset('js/main.js') }}" charset="utf-8"></script>

        @include ('footer')

        @yield('scripts')

        
    </body>
</html>
