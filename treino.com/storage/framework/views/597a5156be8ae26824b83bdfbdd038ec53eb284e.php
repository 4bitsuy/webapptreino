<?php $__env->startSection('content'); ?>
<div id="section-escuela" class="container-fluid">

  <div class="container">
    <div class="row-login">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <table>
              <tr>
                <td style="width:30%"><img src="images/logo-menu.png" class="user-image img-responsive" /></td>
                <td style="width:70%"></td>
              </tr>
            </table>
          </div>

          <div class="panel-body">
            <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
              <?php echo e(csrf_field()); ?>


              <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <label for="email" class="col-md-3 control-label login-label">E-Mail</label>

                <div class="col-md-8">
                  <input id="email" type="email" class="form-control login-input" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                  <?php if($errors->has('email')): ?>
                  <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <label for="password" class="col-md-3 control-label login-label">Contraseña</label>

                <div class="col-md-8">
                  <input id="password" type="password" class="form-control login-input" name="password" required>

                  <?php if($errors->has('password')): ?>
                  <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                  <div class="col-md-5">
                    <div class="checkbox">
                      <label class="login-label">
                      <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Recordar</label>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">¿Olvidaste tu contraseña?</a>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-2 col-md-offset-8">
                  <button type="submit" class="bttn-slant bttn-primary">Entrar</button>
                </div>
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