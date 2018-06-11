<?php $instas = json_decode($instagram); ?>


<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('content'); ?>
<?php if($tieneCursosCortos): ?>
  <div class="cursos-cortos container-fluid">
    <h3>cursos <span>cortos</span></h3>

    <button type="button" name="button" id="mas-cursos" class="ver-mas"></button>
  </div>
  <div id="id-cursos-cortos" class="cursos">
      <?php $__currentLoopData = $cursosCortos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="#">
          <div
            <?php $__currentLoopData = $curso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($key == 'id'): ?>
                <?php echo "id = $value class='img-curso'"; ?>

              <?php endif; ?>
              <?php if($key == 'url-img'): ?>
                <?php echo " style = 'background: url($value) center center';>"; ?>

              <?php endif; ?>
              <?php if($key == 'tipo'): ?>
                <h4> <?php echo e($value); ?> </h4>
              <?php endif; ?>
              <?php if($key == 'titulo'): ?>
                <h3> <?php echo e($value); ?> </h3>
              <?php endif; ?>
              <?php if($key == 'fecha'): ?>
                <div class="info-curso">
                  <p> <strong><?php echo e($value); ?> </strong></p>
              <?php endif; ?>
              <?php if($key == 'descripcion'): ?>
                  <p> <?php echo e($value); ?> </p>
                </div>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
<?php else: ?>
  <div class="inscripciones-abiertas">
    <h3 class="text-right">Inscripciones Abiertas <span>cursos 2018</span></h3>
  </div>
<?php endif; ?>
<div id="section-escuela" class="inicio container-fluid">
  <div class="container">
    <div class="col-lg-12">
      <h3><?php echo array_get($homeData, 'home_1.titulo'); ?></h3>
      <p><?php echo array_get($homeData, 'home_1.contenido'); ?></p>
      <a href="#" class="btn btn-contacto" data-toggle="modal" data-target="#section-contacto">CONTACTO / INSCRIPCIONES</a>
    </div>

    <?php for($i = 2; $i <= 4; $i++): ?>
      <div class="col-md-4">
        <img src="images/icon-<?php echo e($i-1); ?>.png" alt="" class="icono-home">
        <div class="cont-home">
          <h5><?php echo array_get($homeData, 'home_'.$i.'.titulo'); ?></h5>
          <p><?php echo array_get($homeData, 'home_'.$i.'.contenido'); ?></p>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</div>

<div id="section-staff" class="staff">
  <div class="container">
    <div class="col-lg-12 text-center">
      <h3>NUESTRO STAFF</h3>
      <h5>Contamos con un equipo de reconocidos docentes</h5>

      <div id='staff-slide'>
        <?php for($i = 1; $i <= 4; $i++): ?>
          <div class="col-sm-4">
            <div class="one-person">
              <?php echo array_get($staffData, 'staff_'.$i.'.contenido'); ?>

            </div>
            <h6>
              <span><?php echo array_get($staffData, 'staff_'.$i.'.nombre'); ?></span> - <?php echo array_get($staffData, 'staff_'.$i.'.puesto'); ?>

              <!--<img src="images/staff_<?php echo e($i); ?>.jpg" alt="" class="img-responsive img-staff">-->
            </h6>
          </div>
        <?php endfor; ?>
      </div>

    </div>
  </div>
</div>
<div class="inscripcion container-fluid hidden-xs">
  <div class="container">
    <h5>
      Pagá la inscripción a tus cursos de forma sencilla y online
      <a href="#" class="btn btn-inscribite"  data-toggle="modal" data-target="#section-inscripcion">En este sitio!</a>
    </h5>
  </div>
</div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('pie'); ?>
    <div class="instagram-profile col-sm-4 text-left ">
      <h4><img src="<?php echo e(URL::asset('images/instagram-logo.png')); ?>" alt="Instagram" class="img-responsive" style="max-width: 200px;"></h4>
      <div class="" id="instagram-feed">
        <?php $__currentLoopData = $instas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="insta-post">
            <img src="<?php echo e($insta->images->low_resolution->url); ?>" alt="" class="img-responsive">
            <i class="fa fa-heart" aria-hidden="true"></i> <span><?php echo e($insta->likes->count); ?></span>
            <i class="fa fa-comment" aria-hidden="true"></i> <span><?php echo e($insta->comments->count); ?></span>
            <div class="insta-info-post">
              <strong> <a href="https://www.instagram.com/treino.uy/" target="_blank"><?php echo e($insta->user->username); ?> </a></strong><span><?php echo e($insta->caption->text); ?></span>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
    <div class="pie-cont col-sm-4 text-center">
      <img src="images/logo-pie.png" alt="" class="img-responsive img-logo-pie">
      <h3>Formá parte de nuestra escuela.</h3>
      <div class="block-social">
        <a href="https://www.facebook.com/treino.uy" target="_blank"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/treino.uy/" target="_blank"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
        <a href="https://twitter.com/treinouy" target="_blank"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
      </div>
    </div>
    <div class="pie-cont col-sm-4 text-center">
      <h4>NUESTROS ALUMNOS</h4>
      <div class="opiniones" id="opiniones">
        <?php $__currentLoopData = $opiniones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opinion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="opinion">
            <p class="text-justify">"<?php echo array_get($opinion, 'opinion'); ?>"</p>
            <h5><?php echo array_get($opinion, 'alumno'); ?></h5>
            <h6><?php echo array_get($opinion, 'curso'); ?></h6>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>

    <?php echo $__env->make('contacto.form-inscripciones', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <script type="text/javascript">
    $("#staff-slide").slick({
          dots: true,
          infinite: true,
          speed: 500,
          slidesToShow: 3,
          slidesToScroll: 1,
          adaptiveHeight: true,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>