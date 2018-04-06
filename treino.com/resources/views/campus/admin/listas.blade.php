@extends('campus.layouts.app')

@section('content')

  <div class="" id="page-wrapper">
    <div id="page-inner">
      <div class="row">


        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Curso</th><th>Año</th><th>Fecha inicio</th><th>Fecha fin</th><th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($grados as $grado)
                <tr>
                  <td>{{$grado->gra_descripcion}}</td>
                  <td>{{$grado->gra_nro}}</td>
                  <td>{{$grado->gra_fch_ini}}</td>
                  <td>{{$grado->gra_fch_fin}}</td>
                  <td>
                    <a href="{{ route('docente.verLista', $grado->gra_id) }}">
                      <i class="fa fa-users" aria-hidden="true"></i> Ver lista
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>
@endsection
