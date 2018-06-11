<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Treino - Campus')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/campus.css')); ?>" rel="stylesheet">
</head>
<?php if(auth()->guard()->check()): ?>
  <body>
  <div id="app" class="campus">
<?php else: ?>
  <body >
  <div id="app" class="inicio">
<?php endif; ?>

  <?php if(auth()->guard()->check()): ?>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo e(url('/campus')); ?>"><?php echo e(config('app.name', 'Campus')); ?></a>
            </div>

            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">

              <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger square-btn-adjust" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>

               <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                 <?php echo e(csrf_field()); ?>

               </form>

        </nav>

        
        <nav class="navbar-default navbar-side" role="navigation">
          <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
              <li class="text-center">
                <img src="" class="user-image img-responsive"/>
              </li>

            <?php if(Session::get('usuRol') == 'admin'): ?>
              <li>
                <a href="#"><i class="fa fa-user fa-lg"></i> Perfil<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('campus.perfil', Session::get('usuName'))); ?>">Mi perfil</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('campus.cambioPass', Session::get('usuName'))); ?>">Cambiar contraseña</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href=""><i class="fa fa-graduation-cap fa-lg"></i> Cursos<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('grado.index')); ?>">Trabajar con cursos</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('modulo.index')); ?>">Trabajar con módulos</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('tema.index')); ?>">Trabajar con temas</a>
                    </li>
                </ul>
              </li>
              <li>
                  <a href="<?php echo e(route('docente.lista')); ?>"><i class="fa fa-users fa-lg"></i> Listas</a>
              </li>
            <?php endif; ?>

            <?php if(Session::get('usuRol') == 'alumno'): ?>
              <li>
                <a href="#"><i class="fa fa-user fa-lg"></i> Perfil<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('alumno.principal', Session::get('usuName'))); ?>">Principal</a>
                    </li>
                        <li>
                            <a href="<?php echo e(route('campus.perfil', Session::get('usuName'))); ?>">Mi perfil</a>
                        </li>
                    <li>
                        <a href="<?php echo e(route('campus.cambioPass', Session::get('usuName'))); ?>">Cambiar contraseña</a>
                    </li>
                </ul>
              </li>
            <?php endif; ?>

            <?php if(Session::get('usuRol') == 'docente'): ?>
              <li>
                <a href="#"><i class="fa fa-user fa-lg"></i> Perfil<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('docente.principal', Session::get('usuName'))); ?>">Principal</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('campus.perfil', Session::get('usuName'))); ?>">Mi perfil</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('docente.lista', Session::get('usuName'))); ?>">Pasar Lista</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('campus.cambioPass', Session::get('usuName'))); ?>">Cambiar contraseña</a>
                    </li>
                </ul>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </nav>
    </div>
  <?php endif; ?>
  <?php if(session('info')): ?>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-success">
              <?php echo e(session('info')); ?>

            </div>
          </div>
        </div>
      </div>
  <?php endif; ?>
  <?php if(count($errors)): ?>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-danger">
              <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li>
                    <?php echo e($error); ?>

                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
  <?php endif; ?>
  <?php echo $__env->yieldContent('content'); ?>
</div>
<?php if(auth()->guard()->check()): ?>
  <!-- Scripts -->
  <script src="<?php echo e(URL::asset('js/main.js')); ?>" charset="utf-8"></script>
  <script src="<?php echo e(URL::asset('js/excanvas.js')); ?>" charset="utf-8"></script>
  <script src="<?php echo e(URL::asset('js/jquery.knob.min.js')); ?>" charset="utf-8"></script>
  <script src="<?php echo e(URL::asset('js/knoob.custom.js')); ?>" charset="utf-8"></script>
  <?php echo $__env->yieldContent('scripts'); ?>
  <?php echo $__env->yieldContent('script_curso_modal'); ?>
<?php endif; ?>

</body>
</html>
