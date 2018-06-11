
<div class="modal fade in" id='AddArchivosCurso' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="cerrar">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {{-- <button type="button" name="btnClose" class="close" data-dismiss="modal" >
          <span>&times;</span>
        </button> --}}
      </div>
      <div class="modal-body">

        <h3>Agregar archivo a "<span id="tema_nombre" class="modal-title"></span>"</h3>

        <div class="panel-body form-wrap">
          {!! Form::open(['route' => 'archivos.store', 'files' => true]) !!}

            @include('campus.archivos.partials.form')

          {!! Form::close() !!}
        </div>



      {{-- <div class="modal-footer"> --}}
        {{-- <input type="submit" clase="btn btn-primary" value="Guardar"> --}}
      {{-- </div> --}}
    </div>

  </div>

</div>
