@extends('campus.layouts.app')

@section('content')

  <div class="" id="page-wrapper">
    <div class="panel-back-dash">
      <div class="row">
        <div class="col-md-12">

          <h2 id="tit_curso">{{array_get($ColTemasCurso, 'Modulo_titulo')}}</h2>

          <p>
            <span id="subtit_curso"><strong><u>Sobre este curso  </u></strong></span>
          </p>

          <div class="well well-custom">{!! array_get($ColTemasCurso, 'Modulo_descripcion')!!}</div>

          <div class="linea-gradiente"></div> <!-- SEPARADOOORRRRRRR  -->

          @foreach ($ColTemasCurso['Modulo_Temas'] as $itemTema)
            <div class="table-responsive" style="width:90%;">
              <table class="table">
                  <tr>
                    <td>
                      <h4><strong>{{ $itemTema->tema_nombre }}</strong></h4></td>
                    <td style="width:50px;">
                      @if (Session::get('usuRol') == 'docente')

                      @endif
                        <a href="#" class='curso_archivo_modal' data-toggle="modal" data-book-id="{{$itemTema->tema_id}}" data-book-id1="{{$itemTema->tema_nombre}}" data-target="#AddArchivosCurso">
                          <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                        </a>
                    </td>
                  </tr>
                </table>
            </div>

            @foreach ($ColTemasCurso['Modulo_Archivos'] as $itemArchivos)
              @if ($itemTema->tema_id == array_get($itemArchivos, 'tema_id'))

                <div class="row">
                  <div class="col-md-1" style="width:20px;"></div>
                  <div class="col-md-11">
                    <p style="width:70%;">{{ $itemTema->tema_descripcion}}</p>

                    @foreach ($itemArchivos['archivos'] as $archivo)
                      <div class="table-responsive" style="width:95%;">
                        <table class="table">
                          <tr>

                            <td>
                              <img src="{{ URL::asset('images/btn_PDF.png') }}" alt="pdf_download" class="img-rounded img-curso-material"><a href="{{ route('descargar', $archivo->arch_ruta) }}">{{ $archivo->arch_nombre}}</a></td>

                            @if (Session::get('usuRol') == 'docente')
                              <td style="width:40px;">
                                <a href="#">
                                  <i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
                                </a>
                              </td>
                              <td style="width:40px;">
                                <button type="button" name="button" class="btn btn-sm btn-danger"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                              </td>
                            @endif <!-- FIN - (Session::get('usuRol') == 'docente') -->

                          </tr>
                        </table>
                      </div>
                    @endforeach <!-- FIN - ($itemArchivos['archivos'] as $archivo) -->

                  </div>
                </div>

                <div style="margin-bottom:15px; margin-top:25px;">
                  <div class="linea-gradiente"></div>
                </div>

              @endif <!-- FIN - ($itemTema->tema_id == array_get($itemArchivos, 'tema_id')) -->
            @endforeach <!-- FIN - ($ColTemasCurso['Modulo_Archivos'] as $itemArchivos) -->

          @endforeach <!-- FIN - ($ColTemasCurso['Modulo_Temas'] as $itemTema) -->

        </div>
      </div>

      @section('script_curso_modal')

        <script type="text/javascript">
          $(document).ready(function () {
            // $('.curso_archivo_modal').on('show.bs.modal', function (event) {
             $(".curso_archivo_modal").click(function(event){
              var button = $(event.relatedTarget); // Button that triggered the modal
              // var recipient = button.data('whatever') // Extract info from data-* attributes
              // alert(button.data('book-id'));
              var recipient = button.data('book-id'); // Extract info from data-* attributes
              // alert(recipient);
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this);
              modal.find('.modal-title').text('New message to ' + recipient);
               $(event.currentTarget).find('input[name="tema_id"]').text(recipient);
              // modal.find('.modal-body input').val(recipient)
            });

        		  // $(".curso_archivo_modal").on('show.bs.modal', function (e) {
        		  // $(".curso_archivo_modal").click(function(e){
              // var bookId = $(e.relatedTarget).data('book-id');
              //   alert(bookId);
              // $(e.currentTarget).find('input[name="tema_id"]').text(bookId);
            	// 	});

              // $(".curso_archivo_modal").click(function(){
              // var variable = $(this).parent('a').attr('data-book-id');
              // alert(""+variable);
              //ahi busco la variable en la base de datos y me devuelve los datos que quiero mostrar en el model
              //despues cargo los datos en el model y lo muestro
              // });

          });

        </script>
      @EndSection

      @include('campus.alumno.archivos.create')
    </div>

  </div>
  {{-- <script type="text/javascript">
    $('#Tem_id_to_modal').on('show.bs.modal', function(e) {
        var bookId1 = $(e.relatedTarget).data('book-id1');
        alert(bookId1);
        $(e.currentTarget).find('span[name="tema_nombre"]').val(bookId1);
    });
    </script> --}}

@endsection                                                                                                                                                                                                                                                           
