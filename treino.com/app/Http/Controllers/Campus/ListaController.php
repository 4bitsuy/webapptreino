<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use App\Http\Requests\ListaDiariaStoreRequest;

use App\Http\Controllers\Controller;
use App\Traits\DatesTrait;

use App\Docente;
use App\Alumno;
use App\Persona;
use App\Dicta;
use App\Modulo;
use App\Grado;
use App\Tema;
use App\RelTemaDoc;
use App\RelGraMod;
use App\Cursa;
use App\Lista;

class ListaController extends Controller
{

  use DatesTrait;

  public function __construct(){
      $this->middleware('auth');
  }


  public function listas(){

    // verifico el rol del usuario.
    $rol = session('usuRol');
    // si es admin puede ver las listas de todos los cursos...
    if ($rol == 'admin'){

      $grados = Grado::get();

      return view('campus.admin.listas', compact(['grados']));
    } else {

      // supongo que es docente de "instructor en fitnes",
      // para el modulo "Introducción a la práctica del fitness";
      $grado = Grado::find(7);
      $modulo = Modulo::find(9);
      $alumnosLista = $this->setListas(7, 9);

      return view('campus.docente.listas', compact(['grado', 'modulo', 'alumnosLista']));

    }
  }

  public function verLista($gradoId){
    // ver modulos del grado
    $relgramod = RelGraMod::where('gra_id', $gradoId)->pluck('modu_id');
    $grado = Grado::find($gradoId);
    $modulos = [];
    $i = 0;
    foreach($relgramod as $modId){
      $modulo = Modulo::find($modId);

      $modulos = array_add($modulos, $i, $modulo);
      $i++;

    }

    return view('campus.admin.verListas', compact(['grado', 'modulos']));
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
