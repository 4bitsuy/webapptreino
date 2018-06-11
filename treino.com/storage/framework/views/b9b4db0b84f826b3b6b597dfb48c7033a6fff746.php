<?php $__env->startSection('content'); ?>

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">CURSO</div>

          <div class="panel-body form-wrap">
            <form class="" action="<?php echo e(route('grado.store')); ?>" method="post">
              <?php echo e(csrf_field()); ?>


              <div class="form-group">
                <div class="col-md-4">
                  <label for="inputAño">Año</label>
                  <input class="form-control" id="año" name="año" placeholder="Año Curricular">
                </div>
                <div class="col-md-8">
                  <label for="inputAño">Descripción</label>
                  <input class="form-control" id="dsc" name="dsc" placeholder="Nombre Curso">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 mb-3">
                  <label class="control-label" for="date">Fecha inicio</label>
                  <input class="form-control" class="datepicker" id="inicio-datepicker" name="inicio-date" placeholder="DD/MM/YYY">
                </div>
                <div class="col-md-6 mb-3 form_datetime">
                  <label class="control-label" for="date">Fecha fin</label>
                  <input class="form-control" class="datepicker" id="fin-datepicker" name="fin-date" placeholder="DD/MM/YYY">
                </div>
              </div>
              <div style="clear:both"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-default">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('campus.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>