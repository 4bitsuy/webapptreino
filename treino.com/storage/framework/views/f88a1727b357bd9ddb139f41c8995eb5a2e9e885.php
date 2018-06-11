<?php $__env->startSection('content'); ?>

  <div class="" id="page-wrapper">
    <div class="panel-back-dash">
      <div class="row">
        <div class="col-md-12">
              <?php $__currentLoopData = $datos_cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos_curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6">
                  <?php $__currentLoopData = $datos_curso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($key == 'cur_id'): ?>
                      <?php $id_curso = $value; ?>
                    <?php endif; ?>

                          <?php if($key == 'titulo'): ?>
                            <div id="<?php echo $id_curso; ?>" class="panel panel-default panel-default-dash ">
                              <div class="panel-heading dash-heading"><?php echo $value; ?></div> <!-- Fin panel-heading -->
                                <div class="panel-body ">
                          <?php elseif($key == 'porcentaje_curso'): ?>
                                  <div class="col-md-3">
                                    <input class="knob" data-fgColor="red" data-width="100%" readonly value="<?php echo $value; ?>">
                                  </div> <!-- Fin col-md-3 -->
                          <?php elseif($key == 'descripcion'): ?>
                                  <div class="col-md-9">
                                    <p class="text-justify"><?php echo $value; ?></p>
                                  </div><!-- Fin col-md-9 -->
                                  <div class="pull-right">
                                    <a id="<?php echo $id_curso; ?>" href="<?php echo e(route('alumno.curso',$id_curso)); ?>" class="btn bttn-fill bttn-sm bttn-primary bttn-no-outline">Ver Curso</a>
                                    <!--<button class="bttn-fill bttn-sm bttn-primary bttn-no-outline">Ver Curso</button> -->
                                  </div>
                                </div><!-- Fin panel-body -->
                          <?php endif; ?>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div> <!-- Fin panel panel-default -->
                </div> <!-- Fin col-md-6 -->

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('campus.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>