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
use App\ArchivosFTP;


class cursoController extends Controller
{

  public function __construct(){
     $this->middleware('auth');
  }

  /*=======================================
      Pagina del curso seleccionado
  =======================================*/
    public function index(Request $request,$id_curso){

      $AuxRol = $request->session()->get('usuRol');

      $ColTemasCurso = $this->getContenidoCurso($id_curso);
/*      
      if ($AuxRol == 'alumno'){
      }elseif ($AuxRol == 'docente') {
        # code...
      }else{
          # code...
      } //FIN IF ($AuxRol == 'alumno')
*/
      return view('campus.cursos.curso', compact(['ColTemasCurso']));

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
  $ColArchivos = [];
  foreach($TemaAlumno as $tema_id){

    //me quedo con los cursos que pertenezcan al modulo
    $EncontreTemaId = 0;
    foreach($cursoTemasId as $alu_tema_id){
      if ($alu_tema_id == $tema_id){
        $EncontreTemaId = 1;
      }
    }

    //Si el tema(puede ser curso corto) esta en el modulo
    if ($EncontreTemaId == 1){
      $Tema = Tema::find($tema_id);
      $archivos = ArchivosFTP::where('tema_id', $tema_id)->get();//pluck('arch_ruta');
      $itemArchivos = [
        'tema_id' => $tema_id,
        'archivos' => $archivos
      ];

      if (($Tema->tema_es_cur_corto) && (count($cursoTemasId) == 1)){
        $curso_titulo         = $Tema->tema_nombre;
        $curso_descripcion    = $Tema->tema_descripcion;
      }

      $ColTemasCurso = array_add($ColTemasCurso, $i, $Tema);
      $ColArchivos = array_add($ColArchivos, $i, $itemArchivos);

      $i++;

    }

  }
    $ContenidoCurso = [];
    $ContenidoCurso = [
      'Modulo_titulo'       => $curso_titulo,
      'Modulo_descripcion'  => $curso_descripcion,
      'Modulo_Temas' => $ColTemasCurso,
      'Modulo_Archivos' => $ColArchivos
    ];//FIN - $ContenidoCurso

    return $ContenidoCurso;
  } //FIN - getContenidoCurso




  private function getInfoCurso($id_curso){




  } //FIN - getInfoCurso

}
