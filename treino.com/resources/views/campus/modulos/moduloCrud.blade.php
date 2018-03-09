@extends('campus.layouts.app')

@section('content')

<div class="" id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">CURSO</div>

          <div class="panel-body form-wrap">
            <form class="" action="{{ route('modulo.store') }}" method="post">
              {{ csrf_field() }}

              <div class="form-group">
                <div class="col-md-4">
                  <label for="inputNombre">Nombre</label>
                  <input class="form-control" id="año" name="nombre" placeholder="Nombre modulo">
                </div>
                <div class="col-md-8">
                  <label for="inputDescripcion">Descripción</label>
                  <textarea class="form-control" rows="3" name="descripcion"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 mb-3">
                  <label class="control-label" for="curso">Dictado en</label>
                  <select class="form-control" name="curso[]" multiple>
                    @foreach ($grados as $grado)
                      <option value="{{ $grado->gra_id }}">{{ $grado->gra_descripcion }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div style="clear:both"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-default">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
