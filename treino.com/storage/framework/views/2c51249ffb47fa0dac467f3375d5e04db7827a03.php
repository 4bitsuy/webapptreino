<?php $__env->startSection('content'); ?>

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">

          <div class="panel-heading">CURSO
            <a href="<?php echo e(URL::previous()); ?>" class="btn btn-sm btn-primary pull-right" title="volver">
              <i class="fa fa-chevron-circle-left"></i>
            </a>
          </div>

          <div class="panel-body form-wrap">
            <?php echo Form::model($grado, ['route' => [
              'grado.update', $grado->gra_id],
              'method' => 'PUT'
              ]); ?>


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