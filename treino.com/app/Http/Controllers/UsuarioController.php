<?php


namespace App\Http\Controllers;
use App\Usuario; //sera esto?

class UsuarioController extends Controller{
  public function index(){
  //$usuarios = $this->getCursos();
    $usuarios = Usuario::get();
    dd($usuarios);


    /* esto no te va a funcar porque tenes que crear la vista "usuario/principal"
    sisi lo se, ya lo hice
    viste?
    MF: que cosa? (jaja)
    RS: no te abrio el principal.blade.php?
    MF: no :(
      jajaja bueno ta, esta creado.
      RS: como sigo?
      MF: mmmm, viste que en el manual esta como agregar datos desde controladores,
      capaz hacer una pantalla que sea inicializar datos, y que llame a una funcion que de de alta,
      cursos, alumnos, mmmmm y que mas seria???
      Modulos, docentes, temas.... ta miro como crear jajaj no pasa nada.
      ta, entonces este controlador lo dejo por aca...
      y hago otro controller que cree personas/docente u alumno
      RS: dale intento a ver q onda ;)
-eguren.

      perdon, no sabia que tambien te muevo a vos jajaja, ahi va. Por lo menos crear ponele cursos...

      yo estoy trancado con el login mira. */
    //return view('usuario.principal')->with('Usuarios', $usuarios);
  }

  private function getUsuarios(){


  }

}
