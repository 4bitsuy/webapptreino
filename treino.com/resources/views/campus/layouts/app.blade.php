<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    {!! Session::get('usuName') !!}
<div id="app" class="campus">
  @guest
    
  @else
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/campus') }}">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px;
                        float: right;
                        font-size: 16px;"> Last access :

            <a href="{{ route('logout') }}" class="btn btn-danger square-btn-adjust" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
        </nav>

        {{-- NAV TOP --}}
        <nav class="navbar-default navbar-side" role="navigation">
          <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
              <li class="text-center">
                <img src="" class="user-image img-responsive"/>
              </li>

            @if (Session::get('usuRol') == 'docente')
              <li>
                  <a href=""><i class="fa fa-dashboard fa-3x"></i> Escritorio</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Cursos<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Modulos</a>
                    </li>
                    <li>
                        <a href="#">Control asistencias</a>
                    </li>
                </ul>
              </li>
            @elseif ((Session::get('usuRol') == 'alumno'))
              <p>DASHBOARD aalumno</p>
            @endif
          </ul>
        </div>
      </nav>
    </div>
    @yield('content')
  @endguest
</div>

    <!-- Scripts -->
    <script src="{{ URL::asset('js/main.js') }}" charset="utf-8"></script>

</body>
</html>
