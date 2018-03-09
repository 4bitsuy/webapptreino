/** variables Home **/
var right = 0;
var n = $( "#id-cursos-cortos a" ).length;
var tope = n - 3;
var ancho = $(window).width();

jQuery(function ($) {
$.datepicker.regional['es'] = {
  closeText: 'Cerrar',
  prevText: 'Ant<',
  nextText: 'Sig>',
  currentText: 'Hoy',
  monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
  'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
  monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
  'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
  dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
  dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié;', 'Juv', 'Vie', 'Sáb'],
  dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
  weekHeader: 'Sm',
  dateFormat: 'dd/mm/yy',
  firstDay: 1,
  isRTL: false,
  showMonthAfterYear: false,
  yearSuffix: ''
  };
  $.datepicker.setDefaults($.datepicker.regional['es']);
});



$(document).ready(function() {
  /** Generales **/
  var idNombre = 'nombre',
      idCorreo = 'email',
      idTelefono = 'telefono',
      valNombre = 'Nombre',
      valCorreo = 'Correo Electrónico',
      valTelefono = 'Teléfono';

  $("input").focus(function() {
    switch (this.id) {
      case idNombre:
        if (this.value === valNombre){
          this.value = "";
        }
        break;
      case idCorreo:
        if (this.value === valCorreo){
          this.value = "";
        }
        break;
      case idTelefono:
        if (this.value === valTelefono){
          this.value = "";
        }
        break;

    }


  });
  $('input').blur( function() {

    switch (this.id) {

      case idNombre:
        if (this.value === ""){
          this.value = valNombre;
        }
        break;
      case idCorreo:
        if (this.value === ""){
          this.value = valCorreo;
        }
        break;
      case idTelefono:
        if (this.value === ""){
          this.value = valTelefono;
        }
        break;
    }

  });

  $("textarea").focus(function() {
    this.value = "";
  });
  $('textarea').blur( function() {
    switch (this.id) {
      case "mensaje":
        if (this.value = ""){
          this.value = "Tu Mensaje";
        }
        break;
    }
  });


  /** webPage Home **/
  // dibujoTira(n, ancho);
  console.log("prueba");
  $("#opiniones").slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
    });
  $("#instagram-feed").slick({
        dots: false,
        infinite: false,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
  });
  /** webPage Cursos **/
  $('div#cursos').on('click', 'div.fondo-curso', function(){
    var idCursos = $(this).attr('id');
    //alert($(this).attr('id'));

    getInfoCursos(idCursos);
  });

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
});
