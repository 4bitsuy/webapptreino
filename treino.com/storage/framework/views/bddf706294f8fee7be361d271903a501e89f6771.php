<?php $__env->startSection('title', 'CURSOS'); ?>

<?php $__env->startSection('content'); ?>
    <h2 class="not-home">NUESTROS CURSOS</h2>
    <div id="cursos" class="container-fluid cursos">
      <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $curso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($key == 'id'): ?>
            <div class="col-xs-6 col-lg-3-treino fondo-curso" id="<?php echo $value; ?>">
              <div class="background-curso">

              </div>
          <?php endif; ?>
          <?php if($key == 'titulo'): ?>
              <h4><?php echo $value; ?></h4>
          <?php else: ?>
            <?php if($key == 'imagen'): ?>
                <img src="<?php echo $value; ?>" alt="" class="img-responsive">
              </div>
            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <section id="datos-cursos" class="container-fluid data-cursos">
      <div class="col-lg-12 noSel">
        <p class="uno">NO HAS SELECCIONADO NINGÚN CURSO</p>
        <p class="dos">(Seleccioná una opción de arriba)</p>
      </div>
    </section>

    <div class="promociones container-fluid">
      <div class="col-sm-2 col-sm-offset-1">
        <h4>¡Promociones!</h4>
      </div>
      <div class="col-sm-2">
        <p>
          <i class="fa fa-check-square-o"></i>
          Costo anual abonando Contado 20% OFF
        </p>
      </div>
      <div class="col-sm-2">
        <p>
          <i class="fa fa-check-square-o"></i>
          Residentes en el interior 20% OFF mensual (desde 100km distancia)
        </p>
      </div>
      <div class="col-sm-2">
        <p>
          <i class="fa fa-check-square-o"></i>
          PROMO YO + 1 (Inscribite con un amigo y abonan con 15% OFF mensual)
        </p>
      </div>
      <div class="col-sm-2">
        <p>
          <i class="fa fa-check-square-o"></i>
          Alumnos TREINO 10% OFF
        </p>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pie'); ?>
  <?php echo $__env->make('contacto.form-cursos', ['cursos' => $cursos], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>