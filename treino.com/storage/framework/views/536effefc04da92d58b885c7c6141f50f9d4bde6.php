<?php $__env->startSection('content'); ?>

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">CURSO</div>

          <div class="panel-body form-wrap">
            <?php echo Form::open(['route' => 'grado.store']); ?>


              <?php echo $__env->make('campus.cursos.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              
            <?php echo Form::close(); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('campus.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>