<div class="modal fade" id='AddArchivosCurso'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" name="btnClose" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
        <h4>Agregar archivo</h4>
      </div>
      <div class="modal-body">

        <div class="panel-body form-wrap">
          {!! Form::model($post, ['route' => 'archivosftp.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}

            @include('campus.archivos.partials.form')

          {!! Form::close() !!}
        </div>



      <div class="modal-footer">
        {{-- <input type="submit" clase="btn btn-primary" value="Guardar"> --}}
      </div>
    </div>

  </div>

</div>
