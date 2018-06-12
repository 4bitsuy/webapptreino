<div class="modal fade" id='UpdateArchivosCurso'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="cerrar">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
      <div class="modal-body">

        <h3>Modificar archivo de "<span id="tema_nombre" class="modal-title"></span>"</h3>

        <div class="panel-body form-wrap">
          <?php echo Form::model($post, ['route' => 'archivosftp.update', $post->id], 'method' => 'PUT', 'files' => true]); ?>


            <?php echo $__env->make('campus.archivos.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          <?php echo Form::close(); ?>

        </div>



      
        
      
    </div>

  </div>

</div>
