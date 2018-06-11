<?php $__env->startSection('content'); ?>

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">Cambiar contraseña</div>

              <div class="panel-body">
                  <?php echo Form::open(['route' => 'cambioPass']); ?>


                    <div class="form-group">
                      <?php echo e(Form::label('clave_actual', 'Clave Actual')); ?>

                      <?php echo Form::password('clave_actual', [
                        'id' => 'clave_actual',
                        'placeholder' => 'Clave Actual',
                        'class' => 'form-control']); ?>

                    </div>
                    <div class="form-group">
                      <?php echo e(Form::label('clave', 'Nueva Clave')); ?>

                      <?php echo Form::password('clave', [
                        'class' => 'form-control',
                        'id' => 'clave',
                        'placeholder' => 'Clave']); ?>

                    </div>
                    <div class="form-group">
                      <?php echo e(Form::label('clave_confirmation', 'Repetir Clave')); ?>

                      <?php echo Form::password('clave_confirmation', [
                        'class' => 'form-control',
                        'id' => 'repetir_clave',
                        'placeholder' => 'Repetir']); ?>

                    </div>

                    <div class="form-group">
                      <?php echo e(Form::submit('Guardar', ['class' => 'btn btn-primary'])); ?>

                    </div>
                  <?php echo Form::close(); ?>

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