<?php $__env->startSection('content'); ?>

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            CURSO
            <a href="<?php echo e(URL::previous()); ?>" class="btn btn-sm btn-primary pull-right" title="volver">
              <i class="fa fa-chevron-circle-left"></i>
            </a>
          </div>

          <div class="panel-body form-wrap">
            <div class="form-group">
              <div class="col-md-4">
                <p><strong>Año</strong> <?php echo e($grado->gra_nro); ?></p>
              </div>
              <div class="col-md-8">
                <p><strong>Descripción</strong> <?php echo e($grado->gra_descripcion); ?></p>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 mb-3">
                <p><strong>Fecha inicio</strong> <?php echo e($grado->gra_fch_ini); ?></p>
              </div>
              <div class="col-md-6 mb-3 form_datetime">
                <p><strong>Fecha Fin</strong> <?php echo e($grado->gra_fch_fin); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('campus.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>