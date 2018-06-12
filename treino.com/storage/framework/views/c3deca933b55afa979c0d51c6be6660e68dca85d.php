<?php $__env->startSection('content'); ?>

  <div class="" id="page-wrapper">
    <div class="panel-back-dash">
      <div class="row">
        <div class="col-md-12">

              <?php $__currentLoopData = $datos_cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos_curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6">
                    <div id="<?php echo array_get($datos_curso,'dicta_id'); ?>" class="panel panel-default panel-default-dash ">
                      <div class="panel-heading dash-heading"><?php echo array_get($datos_curso,'titulo'); ?></div> <!-- Fin panel-heading -->
                      <div class="panel-body ">
                        <div class="col-md-3">
                          <input class="knob" data-fgColor="red" data-width="100%" readonly value="<?php echo array_get($datos_curso,'porcentaje_curso'); ?>">
                        </div> <!-- Fin col-md-3 -->
                        <div class="col-md-9">
                          <p class="text-justify"><?php echo array_get($datos_curso,'descripcion'); ?></p>
                        </div><!-- Fin col-md-9 -->
                        <div class="pull-right">
                          <a id="<?php echo array_get($datos_curso,'dicta_id'); ?>" href="<?php echo e(route('cursos.curso',array_get($datos_curso,'dicta_id'))); ?>" class="btn bttn-fill bttn-sm bttn-primary bttn-no-outline">Ver Curso</a>
                          <!--<button class="bttn-fill bttn-sm bttn-primary bttn-no-outline">Ver Curso</button> -->
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>

      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('campus.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>