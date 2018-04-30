<div class="modal fade" id='AddArchivosCurso'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" name="btnClose" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
        <h4 class="modal-title"><strong>Agregar archivo a <span name="tema_nombre" class="modal-title"></span></strong></h4>
      </div>
      <div class="modal-body">

        <div class="panel-body form-wrap">
          {!! Form::open(['route' => 'archivos.store', 'files' => true]) !!}

            @include('campus.alumno.archivos.partials.form')

          {!! Form::close() !!}
        </div>



      <div class="modal-footer">
        {{-- <input type="submit" clase="btn btn-primary" value="Guardar"> --}}
      </div>
    </div>

  </div>

</div>
