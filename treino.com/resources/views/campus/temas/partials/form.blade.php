<div class="form-group">
  <div class="col-md-12">
    {{ Form::label('tema_nombre', 'Nombre') }}
    {{ Form::text('tema_nombre', null, [
      'class' => 'form-control',
      'id' => 'nombre',
      'placeholder' => 'Nombre tema']) }}
  </div>
  <div class="col-md-6">
    {{ Form::label('tema_descripcion', 'Descripción') }}
    {{ Form::textarea('tema_descripcion', null, [
      'class' => 'form-control',
      'id' => 'nombre',
      'placeholder' => 'Descripción tema'
      ]) }}
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    {{ Form::label('modulos', 'Modulos') }}
    {!!
      Form::select('modulo[]', \App\Modulo::pluck('modu_nombre', 'modu_id'), null, [
        'multiple' => true,
        'id'=>'cursos',
        'class' => 'form-control'
      ]);
    !!}
  </div>
</div>
<div style="clear:both"></div>
<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>
