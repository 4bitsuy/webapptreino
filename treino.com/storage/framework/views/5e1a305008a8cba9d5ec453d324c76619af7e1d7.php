<div class="form-group">
  <div class="row">
    <div class="col-md-3">
      <?php echo e(Form::label('arch_nombre', 'Nombre', [
        'class' => 'form-modal-lbl'])); ?>

    </div>
    <div class="col-md-8">
      <?php echo e(Form::text('arch_nombre', null, [
        'class' => 'form-control',
        'id' => 'nombre',
        'placeholder' => 'Nombre del archivo'])); ?>

    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-md-3">
      <?php echo e(Form::label('arch_ruta', 'Archivo', [
        'class' => 'form-modal-lbl'])); ?>

    </div>
    <div class="col-md-8">

      <div class="input__row uploader">
        <div id="inputval" class="input-value"></div>
        <label for="arch_ruta"></label>
        <?php echo e(Form::file('arch_ruta', [
          'class' => 'upload',
          'id' => 'arch_ruta'])); ?>

      </div>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    
    <?php echo e(Form::hidden('tema_id')); ?>


  </div>
</div>

<div class="col-md-12"></br></div>
<div style="clear:both"></div>
<div class="modal-footer">
  <label for='Guardar-arch' class='btn bttn-fill bttn-sm bttn-primary bttn-no-outline'>Guardar</label>
    <?php echo e(Form::submit('', ['class' => 'upload', 'id' => 'Guardar-arch'])); ?>

</div>
