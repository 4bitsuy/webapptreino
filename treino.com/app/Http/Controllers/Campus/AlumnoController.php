<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\CollectionCollection;
use App\Http\Controllers\Controller;
use App\Alumno;
use App\Persona;
use App\Cursa;

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
$Documento = '50640349';
    $alu_id = $this->getAlumno($Documento);
    $datos_cursos = $this->getCursos($alu_id);

    //$DatCursos = 'pepe';


    //return $Cursos;
//dd($datos_cursos);
    return view('campus.alumno.alumno', compact('datos_cursos'));


<<<<<<< HEAD
=======
  }

  private function getAlumno($Documento){

  //  $persona = Persona::where('per_ci',$Documento)->first();
    $per_id = Persona::where('per_ci',$Documento)->pluck('per_id')->first();
    $alu_id = Alumno::where('alu_per_id',$per_id)->pluck('alu_nro')->first();
    //$alumno = $persona->personas()->all();

    return $alu_id;

>>>>>>> cf2670fcf8317a4a2a311b08f3dcdfc621b7e581
  }

  private function getCursos($alu_id){


    $Cursos = Cursa::where('alu_id',$alu_id)->get();

    return $Cursos;

  }



}
