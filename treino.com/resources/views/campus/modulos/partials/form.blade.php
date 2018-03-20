<div class="form-group">
  <div class="col-md-12">
    {{ Form::label('modu_nombre', 'Nombre') }}
    {{ Form::text('modu_nombre', null, [
      'class' => 'form-control',
      'id' => 'nombre',
      'placeholder' => 'Nombre módulo']) }}
  </div>
  <div class="col-md-6">
    {{ Form::label('modu_descripcion', 'Descripción') }}
    {{ Form::textarea('modu_descripcion', null, [
      'class' => 'form-control',
      'id' => 'nombre',
      'placeholder' => 'Nombre módulo'
      ]) }}
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    {{ Form::label('cursos', 'Cursos') }}
    {!!
      Form::select('grado[]', \App\Grado::pluck('gra_descripcion', 'gra_id'), null, [
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
