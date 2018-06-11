<?php $__env->startSection('content'); ?>

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">CURSOS</div>

          <div class="panel-body">
            <a href="<?php echo e(route('grado.create')); ?>"><i class="fa fa-plus-circle"></i> Agregar curso</a>
            <div class="table-responsive">
              <table class="table table-hover">
                  <tr>
                    <th>Curso</th><th>Año</th><th>Fecha inicio</th><th>Fecha fin</th><th></th><th></th>
                  </tr>
                <?php $__currentLoopData = $grados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($grado->gra_descripcion); ?></td>
                    <td><?php echo e($grado->gra_nro); ?></td>
                    <td><?php echo e($grado->gra_fch_ini); ?></td>
                    <td><?php echo e($grado->gra_fch_fin); ?></td>
                    <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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