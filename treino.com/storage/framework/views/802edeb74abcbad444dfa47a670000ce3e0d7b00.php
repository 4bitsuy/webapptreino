

<?php $__env->startSection('content'); ?>


  <?php echo e(Form::hidden('grado', $grado->gra_id)); ?>

  <?php echo e(Form::hidden('modulo', $modulo->modu_id)); ?>

    <div class="" id="page-wrapper">
      <div id="page-inner">
        <div class="row">

          <h4 class="col-md-4">
            <i class="fa fa-graduation-cap"></i> <?php echo e($grado->gra_descripcion); ?>

          </h4>

          <?php $__currentLoopData = $fechas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fecha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($fecha); ?></p>
            <a href="<?php echo e(route('docente.verLista', [$fecha, $grado->gra_id, $modulo->modu_id])); ?>">Ver Asistencias</a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('campus.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>