  <div class="form-group">
    <div class="col-md-4">
      {{ Form::label('gra_nro', 'Año') }}
      {{ Form::text('gra_nro', null, ['class' => 'form-control', 'id' => 'año', 'placeholder' => 'Año Curricular']) }}
    </div>
    <div class="col-md-8">
      {{ Form::label('gra_descripcion', 'Descripción') }}
      {{ Form::text('gra_descripcion', null, ['class' => 'form-control', 'id' => 'dsc', 'placeholder' => 'Nombre Curso']) }}
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-6">
      {{ Form::label('gra_fch_ini', 'Fecha inicio') }}
      {{ Form::text('gra_fch_ini', null, ['class' => 'form-control datepicker', 'id' => 'inicio-datepicker', 'placeholder' => 'DD/MM/YYY']) }}
    </div>
    <div class="col-md-6">
      {{ Form::label('gra_fch_fin', 'Fecha fin') }}
      {{ Form::text('gra_fch_fin', null, [
        'class' => 'form-control datepicker',
        'id' => 'fin-datepicker',
        'placeholder' => 'DD/MM/YYY'
        ]) }}
    </div>
  </div>
  <div style="clear:both"></div>
  <div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
  </div>


@section('scripts')
  <script type="text/javascript">
  /** Date picker **/
  $(function () {
    $.datepicker.setDefaults($.datepicker.regional["es"]);
    $("#fin-datepicker").datepicker({
      firstDay: 1,
    });
    $("#inicio-datepicker").datepicker({
      firstDay: 1,
    });
  });
  </script>
@endsection
