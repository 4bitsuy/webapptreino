<div class="form-group">
  <div class="col-md-12">
    {{ Form::label('arch_nombre', 'Nombre') }}
    {{ Form::text('arch_nombre', null, [
      'class' => 'form-control',
      'id' => 'nombre',
      'placeholder' => 'Nombre del archivo']) }}
  </div>
  <div class="col-md-6">
    {{ Form::label('arch_ruta', 'Archivo') }}
    {{ Form::file('arch_ruta') }}
  </div>
  <div class="col-md-6">
    {{-- hidden --}}
    {{ Form::text('tema_id') }}

  </div>
</div>

<div style="clear:both"></div>
<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>
