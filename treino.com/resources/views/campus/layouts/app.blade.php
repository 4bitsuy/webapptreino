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
<div id="app" class="campus">
  @auth
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/campus') }}">{{ config('app.name', 'Campus') }}</a>
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px;
                        float: right;
                        font-size: 16px;">

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

            @if (Session::get('usuRol') == 'admin')
              <li>
                <a href="#"><i class="fa fa-user fa-lg"></i> Perfil<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('campus.perfil', Session::get('usuName')) }}">Mi perfil</a>
                    </li>
                    <li>
                        <a href="{{ route('campus.cambioPass', Session::get('usuName')) }}">Cambiar contraseña</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="{{ route('grado.index') }}"><i class="fa fa-graduation-cap fa-lg"></i> Cursos</span></a>
              </li>
            @endif
          </ul>
        </div>
      </nav>
    </div>
  @endauth
  @yield('content')
</div>

    <!-- Scripts -->
    <script src="{{ URL::asset('js/main.js') }}" charset="utf-8"></script>

</body>
</html>
