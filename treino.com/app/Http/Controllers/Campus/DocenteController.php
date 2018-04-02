<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\CollectionCollection;

use App\Http\Controllers\Controller;

use App\Docente;
use App\Persona;
use App\Alumno;
use App\Grado;
use App\Modulo;
use App\Cursa;


class DocenteController extends Controller
{

  public function __construct(){
      $this->middleware('auth');
  }

  public function index(Request $request){

    $Documento = $request->session()->get('usuDocu');
    $personas = Persona::where('per_ci',$Documento)->first();
    $alumnos = $personas->alumno;
    dd($alumnos);
  }

  public function listas(){

    // supongo que es docente de "instructor en fitnes",
    // para el modulo "Introducción a la práctica del fitness";
    $grado = Grado::find(7);
    $modulo = Modulo::find(9);
    $alumnosLista = $this->setListas(7, 9);

    return view('campus.docente.listas', compact(['grado', 'modulo', 'alumnosLista']));
  }

  public function guardarLista(Request $request){
    dd($request->input('asiste'));
  }

  private function setListas($gradoId, $moduloId){

    $cursan = Cursa::where('gra_id', $gradoId)
                   ->where('modu_id', $moduloId)
                   ->get();

    $alumnoLista = [];
    $i = 1;
    foreach($cursan as $cursa){
      $alumno = Alumno::find($cursa->alu_id);
      $perAlu = Persona::where('per_id', $alumno->alu_per_id)->first();

      $itemAlumnoLista = [];
      $itemAlumnoLista = [
        'gradoId'     => $gradoId,
        'moduloId'    => $moduloId,
        'aluNroLista' => $i++,
        'alumnoId'    => $cursa->alu_id,
        'aluCI'       => $perAlu->per_ci,
        'aluNom'      => $perAlu->per_pri_nombre,
        'aluApe'      => $perAlu->per_pri_apellido,

      ];

      $alumnoLista = array_add($alumnoLista, $cursa->alu_id, $itemAlumnoLista);
    }

    return $alumnoLista;

  }

}
