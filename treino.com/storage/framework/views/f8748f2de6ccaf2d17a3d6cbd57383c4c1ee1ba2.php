<?php if(Session::get('usuRol') == 'admin'): ?>
  <?php echo e(redirect('admin.home')); ?>

<?php endif; ?>

<?php if(Session::get('usuRol') == 'alumno'): ?>
  <?php echo e(redirect('alumno.principal')); ?>

<?php endif; ?>

<?php if(Session::get('usuRol') == 'docente'): ?>
  <?php echo e(redirect('docente.principal')); ?>

<?php endif; ?>
