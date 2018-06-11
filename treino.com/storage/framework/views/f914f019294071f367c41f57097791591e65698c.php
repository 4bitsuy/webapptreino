<?php $__env->startSection('content'); ?>

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
             <h2>Perfil General</h2>
                <h5><?php echo e($persona->per_pri_nombre); ?> <?php echo e($persona->per_pri_apellido); ?></h5>
            </div>

            <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel panel-heading">
                          Datos personales
                      </div>
                      <div class="panel panel-body">
                        <div class="col-md-12">
                          <p>DOCUMENTO <strong> <?php echo e($persona->per_ci); ?></strong></p>
                        </div>
                        <div class="col-md-6">
                          <p>NOMBRE <strong> <?php echo e($persona->per_pri_nombre); ?> <?php echo e($persona->per_seg_nombre); ?></strong></p>
                        </div>
                        <div class="col-md-6">
                          <p>APELLIDO <strong> <?php echo e($persona->per_pri_apellido); ?> <?php echo e($persona->per_seg_apellido); ?></strong></p>
                        </div>
                        <div class="col-md-4">
                          <p>FECHA NACIMIENTO <strong> <?php echo e($persona->per_fechanac); ?></strong></p>
                        </div>
                        <div class="col-md-8">
                          <p>CORREO <strong> <?php echo e($persona->per_email); ?></strong></p>
                        </div>
                      </div>
                  </div>

              </div>

            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel panel-heading">
                          Datos usuario
                      </div>
                      <div class="panel panel-body">
                        <div class="col-md-6">
                          <p>USUARIO ACCESO <strong> <?php echo e($user->email); ?></strong></p>
                        </div>
                        <div class="col-md-6">
                          <p>CONTRASEÑA <strong> ******</strong></p>
                        </div>
                        <div class="col-md-6">
                          <p>ROL <strong> <?php echo e($rol->descripcion); ?></strong></p>
                        </div>
                      </div>
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