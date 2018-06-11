  <div class="form-group">
    <div class="col-md-4">
      <?php echo e(Form::label('gra_nro', 'Año')); ?>

      <?php echo e(Form::text('gra_nro', null, ['class' => 'form-control', 'id' => 'año', 'placeholder' => 'Año Curricular'])); ?>

    </div>
    <div class="col-md-8">
      <?php echo e(Form::label('gra_descripcion', 'Descripción')); ?>

      <?php echo e(Form::text('gra_descripcion', null, ['class' => 'form-control', 'id' => 'dsc', 'placeholder' => 'Nombre Curso'])); ?>

    </div>
  </div>
  <div class="form-group">
    <div class="col-md-6">
      <?php echo e(Form::label('gra_fch_ini', 'Fecha inicio')); ?>

      <?php echo e(Form::text('gra_fch_ini', null, ['class' => 'form-control datepicker', 'id' => 'inicio-datepicker', 'placeholder' => 'DD/MM/YYY'])); ?>

    </div>
    <div class="col-md-6">
      <?php echo e(Form::label('gra_fch_fin', 'Fecha fin')); ?>

      <?php echo e(Form::text('gra_fch_fin', null, [
        'class' => 'form-control datepicker',
        'id' => 'fin-datepicker',
        'placeholder' => 'DD/MM/YYY'
        ])); ?>

    </div>
  </div>
  <div style="clear:both"></div>
  <div class="form-group">
    <?php echo e(Form::submit('Guardar', ['class' => 'btn btn-primary'])); ?>

  </div>


<?php $__env->startSection('scripts'); ?>
  <script type="text/javascript">
  /** Date picker **/
  $(function () {
    $.datepicker.setDefaults($.datepicker.regional["es"]);
    $("#fin-datepicker").datepicker({
      firstDay: 1,
    });
    $("#inicio-datepicker").datepicker({
      firstDay: 1,
    });
  });
  </script>
<?php $__env->stopSection(); ?>
