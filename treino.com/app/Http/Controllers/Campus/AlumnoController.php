<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\CollectionCollection;
use App\Alumno;
use App\Persona;
use App\Cursa;

class AlumnoController extends Controller{

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

    $DatAlumno = $this->getAlumno($this->$Documento);
    $DatCursos = $this->getCursos($DatAlumno);
//  moduloGET
//  gradoGET


    //return $Cursos;
dd($DatCursos);
    return view('Alumno.home');


  }

  private function getAlumno($Documento){

    $persona = Persona::where('per_ci',$Documento)->first();
    $alumno = $persona->alumno;

    return $alumno;

  }

  private function getAlumno($DatAlumno){

    $Cursos = Cursa::where('alu_id',$DatAlumno->alu_id);

    return $Cursos;

  }



}
