<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\CollectionCollection;
use App\Alumno;
use App\Persona;
use App\Cursa;

class AlumnoController extends Controller{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function index(Request $request){


    /*$personas = Persona::all();

    foreach ($personas as $persona) {
      $alumno = new Alumno;

  //$persona = Persona::find(1/* Aca va variable seguro );

      $alumno = $persona->personas()->save($alumno);
    }
*/

    //RS -> retorno datos del alumno en session segun ci
  /*  $Documento = $request->session()->get('usuDocu');

    $DatAlumno = $this->getAlumno($this->$Documento);
    $DatCursos = $this->getCursos($DatAlumno);
    */
    $DatCursos = 'pepe';


    //return $Cursos;
//dd($DatCursos);
    return view('Alumno.home')->whit('DatosCurso',$DatCursos);


<<<<<<< HEAD
=======
  }

  private function getAlumno($Documento){

    $persona = Persona::where('per_ci',$Documento)->first();
    $alumno = $persona->alumno;

    return $alumno;

>>>>>>> cf2670fcf8317a4a2a311b08f3dcdfc621b7e581
  }

  private function getCursos($DatAlumno){

    $Cursos = Cursa::where('alu_id',$DatAlumno->alu_id);

    return $Cursos;

  }



}
