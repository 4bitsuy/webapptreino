  <div class="form-group">
    <div class="col-md-4">
      {{ Form::label('año', 'Año') }}
      {{ Form::text('gru_nro', null, ['class' => 'form-control', 'id' => 'año', 'placeholder' => 'Año Curricular']) }}
    </div>
    <div class="col-md-8">
      {{ Form::label('dsc', 'Descripción') }}
      {{ Form::text('gru_descripcion', null, ['class' => 'form-control', 'id' => 'dsc', 'placeholder' => 'Nombre Curso']) }}
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-6">
      {{ Form::label('inicio-date', 'Fecha inicio') }}
      {{ Form::text('gru_fch_ini', null, ['class' => 'form-control datepicker', 'id' => 'inicio-datepicker', 'placeholder' => 'DD/MM/YYY']) }}
    </div>
    <div class="col-md-6">
      {{ Form::label('fin-date', 'Fecha fin') }}
      {{ Form::text('gru_fch_fin', null, ['class' => 'form-control datepicker', 'id' => 'fin-datepicker', 'placeholder' => 'DD/MM/YYY']) }}
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
