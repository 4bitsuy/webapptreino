<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta id="token" name="token" content="<?php echo e(csrf_token()); ?>">

        <title>Treino - <?php echo $__env->yieldContent('title'); ?></title>

        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('/css/app.css')); ?>">

        <link rel="icon" href="<?php echo e(URL::asset('favicon.ico')); ?>" type="image/gif" sizes="16x16">

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
        <?php if(session('status')): ?>
            <div class="alert alert-success msg">
              <?php echo array_get(session('status'), 'mail'); ?>

              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <?php endif; ?>

        <header class="hidden-xs container-fluid nav-contact">
          <div class="container">
            <div class="phone"><span class="glyphicon glyphicon-earphone"></span> 099 989 141</div>
            <div class="mail"><span class="glyphicon glyphicon-envelope"></span> info@treino.com.uy</div>
          </div>
        </header>
        <?php echo $__env->make(config('laravel-menu.views.bootstrap-items'), ['items' => $NavBar->roots()], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <section class="page">
            <?php echo $__env->yieldContent('content'); ?>
        </section>

        <section class="pie container">
            <?php echo $__env->yieldContent('pie'); ?>
        </section>

        <footer class="container-fluid">
          <div class="container">
            <span>Desarrollado por <a href="#"> <img src="<?php echo e(URL::asset('images/4bits.png')); ?>" alt="" class="img-copyright"></a></span>
          </div>
        </footer>

        <?php echo $__env->make('contacto.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <script src="<?php echo e(URL::asset('js/main.js')); ?>" charset="utf-8"></script>

        <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('scripts'); ?>

        
    </body>
</html>
