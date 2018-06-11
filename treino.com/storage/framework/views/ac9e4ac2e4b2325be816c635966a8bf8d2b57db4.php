<?php $__env->startSection('content'); ?>

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">MODULOS</div>

          <div class="panel-body">
            <a href="<?php echo e(route('modulo.create')); ?>"><i class="fa fa-plus-circle"></i> Agregar modulo</a>
            <div class="table-responsive">
              <table class="table table-hover">
                  <tr>
                    <th>Nombre</th><th>Descripcion</th><th></th><th></th>
                  </tr>

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('campus.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>