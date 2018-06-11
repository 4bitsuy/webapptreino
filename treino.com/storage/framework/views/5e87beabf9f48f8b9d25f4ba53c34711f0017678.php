<?php $__env->startSection('content'); ?>

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            LISTA DE MODULOS
            <a href="<?php echo e(route('modulo.create')); ?>" class="btn btn-sm btn-primary pull-right">
              <i class="fa fa-plus-circle"></i> Agregar
            </a>
          </div>

          <div class="panel-body">

            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Nombre</th><th>Descripcion</th><th></th><th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $modulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($modulo->modu_nombre); ?></td>
                      <td><?php echo e($modulo->modu_descripcion); ?></td>
                      <td>
                        <a href="<?php echo e(route('modulo.show', $modulo->modu_id)); ?>">
                          <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                      </td>
                      <td>
                        <a href="<?php echo e(route('modulo.edit', $modulo->modu_id)); ?>">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                      </td>
                      <td>
                        <?php echo Form::open(['route' => ['modulo.destroy', $modulo->modu_id], 'method' => 'delete']); ?>

                          <button type="button" name="button" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        <?php echo Form::close(); ?>

                      </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <?php echo e($modulos->render()); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('campus.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>