<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use App\Http\Requests\ListaDiariaStoreRequest;
use Illuminate\Database\Eloquent\CollectionCollection;

use App\Traits\DatesTrait;

use App\Http\Controllers\Controller;

use App\Docente;
use App\Persona;
use App\Alumno;
use App\Grado;
use App\Modulo;
use App\Cursa;
use App\Lista;


class DocenteController extends Controller
{

  use DatesTrait;

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

  public function guardarLista(ListaDiariaStoreRequest $request){

    $fecha = $this->getDateForDB($request->input('fch_clase'));

    $alumnosLista = $this->setListas($request->input('grado'), $request->input('modulo'));

    $fecha = $this->getDateForDB($request->input('fch_clase'));

    foreach($alumnosLista as $alumno){
      $lista = new Lista;
      $lista->alu_id     = array_get($alumno, 'alumnoId');
      $lista->lisfecha   = $fecha;
      $lista->modu_id    = $request->input('modulo');
      $lista->gra_id     = $request->input('grado');
      $lista->asistencia = $this->asisteAlumno(array_get($alumno, 'alumnoId'), $request->input('asiste'));

      $lista->save();
    }

    return redirect()->route('docente.lista')
    ->with('info', 'Lista del día guardada.');
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

  private function asisteAlumno($alumnoId, $asistencias){

    $return = 0;
    for($i = 0; ($i < count($asistencias)) && ($return == 0); $i++){
      if ($alumnoId == $asistencias[$i]){
        $return = 1;
      }
    }

    return $return;


    /* INTENCION RECURSIVA.
    if ($alumnoId == array_first($asistencias)){
      return 1;
    } else{
      echo(array_first($asistencias));
      if (isset($asistencias)){
        array_forget($asistencias, array_first($asistencias));
        $this->asisteAlumno($alumnoId, $asistencias);
      } else{
        return 0;
      }
    }
    */
  }

}
