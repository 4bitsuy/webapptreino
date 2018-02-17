/** variables Home **/
var right = 0;
var n = $( "#id-cursos-cortos a" ).length;
var tope = n - 3;
var ancho = $(window).width();

$(document).ready(function() {
  /** Generales **/
  $("input").focus(function() {
    this.value = "";
  });
  $('input').blur( function() {
    switch (this.id) {
      case "nombre":
        this.value = "Nombre";
        break;
      case "email":
        this.value = "Correo Electrónico";
        break;
      case "telefono":
        this.value = "Teléfono";
        break;
      default:
        this.value = this.id;
    }
  });
  $("textarea").focus(function() {
    this.value = "";
  });
  $('textarea').blur( function() {
    switch (this.id) {
      case "mensaje":
        this.value = "Tu Mensaje";
        break;
      default:
        this.value = this.id;
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

  /** webPage Cursos **/
  $('div#cursos').on('click', 'div.fondo-curso', function(){
    var idCursos = $(this).attr('id');
    //alert($(this).attr('id'));

    getInfoCursos(idCursos);
  });
});
