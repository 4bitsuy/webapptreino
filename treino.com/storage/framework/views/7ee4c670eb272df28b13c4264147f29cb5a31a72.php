<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="<?php echo e(URL::asset('images/logo-menu.png')); ?>" class="img-responsive"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

          <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li<?php $lm_attrs = $item->attr(); ob_start(); ?> <?php if($item->hasChildren()): ?>class ="dropdown"<?php endif; ?> <?php echo \Lavary\Menu\Builder::mergeStatic(ob_get_clean(), $lm_attrs); ?>>
              <?php if($item->link): ?> <a<?php $lm_attrs = $item->link->attr(); ob_start(); ?> <?php if($item->hasChildren()): ?> class="dropdown-toggle" data-toggle="dropdown" <?php endif; ?> <?php echo \Lavary\Menu\Builder::mergeStatic(ob_get_clean(), $lm_attrs); ?> href="<?php echo $item->url(); ?>">
                <?php echo $item->title; ?>

                <?php if($item->hasChildren()): ?> <b class="caret"></b> <?php endif; ?>
              </a>
              <?php else: ?>
                <?php echo $item->title; ?>

              <?php endif; ?>
              <?php if($item->hasChildren()): ?>
                <ul class="dropdown-menu">
                  <?php echo $__env->make(config('laravel-menu.views.bootstrap-items'),
          array('items' => $item->children()), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </ul>
              <?php endif; ?>
            </li>
            <?php if($item->divider): ?>
            	<li<?php echo Lavary\Menu\Builder::attributes($item->divider); ?>></li>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
