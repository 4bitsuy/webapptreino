<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\CollectionCollection;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;

use App\Cursa;
use App\Modulo;
use App\Tema;
use App\RelTemaModulo;
use App\RelTemaAlu;



class cursoController extends Controller
{
  /*=======================================
      Pagina del curso seleccionado
  =======================================*/
    public function index(Request $request,$id_curso){

      $AuxRol = $request->session()->get('usuRol');

      if ($AuxRol == 'alumno'){
        $ColTemasCurso = $this->getContenidoCurso($id_curso);

      }elseif ($AuxRol == 'docente') {
        # code...

      }else{
          # code...

      } //FIN IF ($AuxRol == 'alumno')

      return view('campus.alumno.curso', compact(['ColTemasCurso']));

    } //FIN - index



  private function getContenidoCurso($id_curso){

    $Cursa        = Cursa::find($id_curso);
    $Modulo       = Modulo::where('modu_id',$Cursa->modu_id)->first();
    $cursoTemasId = RelTemaModulo::where('modu_id',$Cursa->modu_id)->pluck('tema_id');
    $TemaAlumno   = RelTemaAlu::where('alu_id',$Cursa->alu_id)->pluck('tema_id');

    //Titulo y descripcion del curso
    $curso_titulo = $Modulo->modu_nombre;
    $curso_descripcion =  $Modulo->modu_descripcion;



  $i = 0;
  $ColTemasCurso = [];
  foreach($TemaAlumno as $tema_id){

    //me quedo con los cursos que pertenezcan al modulo
    $EncontreTemaId = 0;
    foreach($cursoTemasId as $alu_tema_id){
      if ($alu_tema_id == $tema_id){
        $EncontreTemaId = 1;
      }
    }

    //Si el curso esta en el modulo
    if ($EncontreTemaId > 0){
      $Tema = Tema::find($tema_id);

      if (($Tema->tema_es_cur_corto) && (count($cursoTemasId) == 1)){
        $curso_titulo         = $Tema->tema_nombre;
        $curso_descripcion    = $Tema->tema_descripcion;
      }

      $ColTemasCurso = array_add($ColTemasCurso, $i, $Tema);
      $i++;

    }

  }
    $ContenidoCurso = [];
    $ContenidoCurso = [
      'Modulo_titulo'       => $curso_titulo,
      'Modulo_descripcion'  => $curso_descripcion,
      'Modulo_Temas' => $ColTemasCurso
    ];//FIN - $ContenidoCurso

    return $ContenidoCurso;
  } //FIN - getContenidoCurso




  private function getInfoCurso($id_curso){




  } //FIN - getInfoCurso

}
