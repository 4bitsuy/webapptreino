<?php $__env->startSection('content'); ?>
<?php echo Form::open(['route' => 'docente.guardarLista']); ?>

<?php echo e(Form::hidden('grado', $grado->gra_id)); ?>

<?php echo e(Form::hidden('modulo', $modulo->modu_id)); ?>

  <div class="" id="page-wrapper">
    <div id="page-inner">
      <div class="row">

        <h4 class="col-md-9">
          <i class="fa fa-graduation-cap"></i> <?php echo e($grado->gra_descripcion); ?> - <?php echo e($modulo->modu_nombre); ?>

        </h4>
        <div class="col-md-3">
            <i class="fa fa-calendar-o"></i> <?php echo e(Form::text('fch_clase', null, ['class'       => 'form-control datepicker',
                                                                               'id'          => 'fch_clase-datepicker',
                                                                               'placeholder' => 'fecha clase',
                                                                               'required'    => 'required'])); ?>

        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            LISTA DE ALUMNOS

          </div>

          <div class="panel-body">


              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th></th><th>Nro. Lista</th><th>Alumno</th><th>Documento</th><th class="bg-success">Asiste</th><th class="bg-warning">Justificada</th><th class="bg-danger">No Asiste</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $alumnosLista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumnoLista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><i class="fa fa-user-circle"></i></td>
                        <td><?php echo e(array_get($alumnoLista, 'aluNroLista')); ?></td>
                        <td><?php echo e(array_get($alumnoLista, 'aluNom')); ?> <?php echo e(array_get($alumnoLista, 'aluApe')); ?></td>
                        <td><?php echo e(array_get($alumnoLista, 'aluCI')); ?></td>

                        <td class="bg-success"><?php echo e(Form::checkbox('asiste[]', array_get($alumnoLista, 'alumnoId'))); ?></td>
                        <td class="bg-danger"><?php echo e(Form::checkbox('noAsiste[]', array_get($alumnoLista, 'alumnoId'))); ?></td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>

              <?php echo e(Form::submit('Guardar', ['class' => 'btn btn-primary pull-right'])); ?>



          </div>
        </div>

      </div>
    </div>
  </div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <script type="text/javascript">
  /** Date picker **/
  $(function () {
    $.datepicker.setDefaults($.datepicker.regional["es"]);
    $("#fch_clase-datepicker").datepicker({
      firstDay: 1,
    });
  });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('campus.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>