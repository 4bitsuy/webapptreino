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
          {!! Form::model($post, ['route' => 'archivosftp.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}

            @include('campus.archivos.partials.form')

          {!! Form::close() !!}
        </div>



      {{-- <div class="modal-footer"> --}}
        {{-- <input type="submit" clase="btn btn-primary" value="Guardar"> --}}
      {{-- </div> --}}
    </div>

  </div>

</div>
