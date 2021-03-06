

<?php $__env->startSection('content'); ?>

  <div class="" id="page-wrapper">
    <div class="panel-back-dash">
      <div class="row">
        <div class="col-md-12">
          <div class="">
            <h2 class="text-left" id="tit_curso"><?php echo e(array_get($ColTemasCurso, 'Modulo_titulo')); ?></h2>
              <?php if(Session::get('usuRol') == 'docente'): ?>
                <a class="btn bttn-minimal bttn-sm bttn-success" href="<?php echo e(route('docente.lista', [$idGrado, $idModulo])); ?>">Pasar lista</a>
                <a class="btn bttn-minimal bttn-sm bttn-warning" href="<?php echo e(route('docente.verFechaLista', [$idGrado, $idModulo])); ?>">Ver lista</a>
              <?php endif; ?>
          </div>
          <p>
            <span id="subtit_curso"><strong><u>Sobre este curso  </u></strong></span>
          </p>

          <div class="well well-custom"><?php echo array_get($ColTemasCurso, 'Modulo_descripcion'); ?></div>

          <div class="linea-gradiente"></div> <!-- SEPARADOOORRRRRRR  -->

          <?php $__currentLoopData = $ColTemasCurso['Modulo_Temas']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemTema): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="table-responsive" style="width:90%;">
              <table class="table">
                  <tr>
                    <td>
                      <h4><strong><?php echo e($itemTema->tema_nombre); ?></strong></h4></td>
                    <td style="width:50px;">

                      <?php if(Session::get('usuRol') == 'docente'): ?>

                        <a href="#" id="archivo_modal" data-id="<?php echo $itemTema->tema_id; ?>" class='curso_archivo_modal' data-toggle="modal" data-nombre="<?php echo e($itemTema->tema_nombre); ?>" data-target="#AddArchivosCurso">
                          <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                        </a>
                      <?php endif; ?>

                    </td>
                  </tr>
                </table>
            </div>

            <?php $__currentLoopData = $ColTemasCurso['Modulo_Archivos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemArchivos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($itemTema->tema_id == array_get($itemArchivos, 'tema_id')): ?>

                <div class="row">
                  <div class="col-md-1" style="width:20px;"></div>
                  <div class="col-md-11">
                    <p style="width:70%;"><?php echo e($itemTema->tema_descripcion); ?></p>

                    <?php $__currentLoopData = $itemArchivos['archivos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archivo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="table-responsive" style="width:95%;">
                        <table class="table">
                          <tr>

                            <td>
                              <img src="<?php echo e(URL::asset('images/btn_PDF.png')); ?>" alt="pdf_download" class="img-rounded img-curso-material"><a href="<?php echo e(route('descargar', $archivo->arch_ruta)); ?>"><?php echo e($archivo->arch_nombre); ?></a></td>

                            <?php if(Session::get('usuRol') == 'docente'): ?>
                              <td style="width:40px;">
                                <a href="#">
                                  <i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
                                </a>
                              </td>
                              <td style="width:40px;">
                                <button type="button" name="button" class="btn btn-sm btn-danger"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                              </td>
                            <?php endif; ?> <!-- FIN - (Session::get('usuRol') == 'docente') -->

                          </tr>
                        </table>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- FIN - ($itemArchivos['archivos'] as $archivo) -->

                  </div>
                </div>

                <div style="margin-bottom:15px; margin-top:25px;">
                  <div class="linea-gradiente"></div>
                </div>

              <?php endif; ?> <!-- FIN - ($itemTema->tema_id == array_get($itemArchivos, 'tema_id')) -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- FIN - ($ColTemasCurso['Modulo_Archivos'] as $itemArchivos) -->

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- FIN - ($ColTemasCurso['Modulo_Temas'] as $itemTema) -->

        </div>
      </div>

      <?php echo $__env->make('campus.archivos.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <?php $__env->startSection('scripts'); ?>

        <script type="text/javascript">
          $( ".curso_archivo_modal" ).click(function() {
              var temaId = $(this).data('id');
              var temaNombre = $(this).data('nombre');
              var input = document.getElementById("tema_id");
              var span = document.getElementById("tema_nombre");
              input.value = temaId;
              span.innerHTML = temaNombre;
          }) ;
        </script>
      <?php $__env->stopSection(); ?>
    </div>

  </div>

<?php $__env->stopSection(); ?>                                                                                                                                                                                                                                                           

<?php echo $__env->make('campus.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>