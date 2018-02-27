/** variables Home **/
var right = 0;
var n = $( "#id-cursos-cortos a" ).length;
var tope = n - 3;
var ancho = $(window).width();

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
});
