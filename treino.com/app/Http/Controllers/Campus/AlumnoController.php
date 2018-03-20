<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\CollectionCollection;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Alumno;
use App\Persona;
use App\Cursa;
use App\Modulo;
use App\Grado;
use App\RelTemaAlu;

class AlumnoController extends Controller{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

   public function __construct(){
       $this->middleware('auth');
   }

  public function index(Request $request){

    /*$personas = Persona::all();

    foreach ($personas as $persona) {
      $alumno = new Alumno;

  //$persona = Persona::find(1/* Aca va variable seguro );

      $alumno = $persona->personas()->save($alumno);
    }
*/

    //RS -> retorno datos del alumno en session segun ci
    $Documento = $request->session()->get('usuDocu');
    //$Documento = '50640349'; //documento temporal par no tener que loguear
    $alu_id = $this->getAlumno($Documento);
    $datos_cursos = $this->getCursos($alu_id);
    //dd($datos_cursos);
    return view('campus.alumno.alumno', compact('datos_cursos'));

  }

  private function getAlumno($Documento){

    $per_id = Persona::where('per_ci',$Documento)->pluck('per_id')->first();
    $alu_id = Alumno::where('alu_per_id',$per_id)->pluck('alu_nro')->first();

    return $alu_id;

  }


  private function getCursos($alu_id){

    $Cursos = Cursa::where('alu_id',$alu_id)->get();
    $TemaId = RelTemaAlu::where('alu_id',$alu_id)->pluck('tema_id')->first();
    
    $datos_cursos = [];

    foreach ($Cursos as $Curso) {
        $Modulo = Modulo::where('modu_id',$Curso->modu_id)->first();
        $Grado  = Grado::where('gra_id',$Curso->gra_id)->first();
        $Tema  = Tema::where('tema_id',$TemaId)->first();
    
        $PorcentajeCurso =  $this->getPorcentCurso($Tema);

        $item_datos_cursos = [];
        $item_datos_cursos =
        [
            'modu_nombre' => $Modulo->modu_nombre,
            'modu_id' => $Curso->modu_id,
            'modu_descripcion' => $Modulo->modu_descripcion,
            'cur_id' => $Curso->cur_id,
            'alu_id' => $Curso->alu_id,
            'gra_id' => $Curso->gra_id,
            'gra_nro' => $Grado->gra_nro,
            'gra_descripcion' => $Grado->gra_descripcion,
            'gra_fch_ini' => $Grado->gra_fch_ini,
            'gra_fch_fin' => $Grado->gra_fch_fin,
            'gra_estado' => $Grado->gra_estado,
            'cur_estado' => $Curso->cur_estado,
            'tema_nombre' => $Tema->tema_nombre,
            'tema_descripcion' => $Tema->tema_descripcion,
            'tema_es_cur_corto' => $Tema->tema_es_cur_corto,
            'tema_fch_ini' => $Tema->tema_fch_ini,
            'tema_fch_fin' => $Tema->tema_fch_fin,
            'porcentaje_curso' => $PorcentajeCurso
        ];// Fin array
        $datos_cursos = array_add($datos_cursos,$Curso->cur_id,$item_datos_cursos); //Agrego una coleccion de arrays

    } //Fin foreach


    return $datos_cursos;

  }//Fin Function getCursos
  
  
  private function getPorcentCurso($Tema){
    
    if (isset($Tema->tema_fch_ini) && isset($Tema->tema_fch_fin)){
      $PorcentajeCurso = $Tema->tema_fch_ini->diffInDays($Tema->tema_fch_fin);
    }else{
      $PorcentajeCurso = 0;
    }
    
    return $PorcentajeCurso;

  }//Fin Function getPorcentCurso
  
}
