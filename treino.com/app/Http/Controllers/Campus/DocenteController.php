<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use App\Http\Requests\ListaDiariaStoreRequest;
use Illuminate\Database\Eloquent\CollectionCollection;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use App\Traits\DatesTrait;
use Carbon\Carbon;
use App\Docente;
use App\Persona;
use App\Dicta;
use App\Modulo;
use App\Grado;
use App\Tema;
use App\RelTemaDoc;
use App\Cursa;
use App\Lista;


class DocenteController extends Controller
{

  use DatesTrait;

  public function __construct(){
      $this->middleware('auth');
  }

  public function index(Request $request){

    //RS -> retorno datos del docente en session segun ci
    $Documento = $request->session()->get('usuDocu');
    //$Documento = '50640349'; //documento temporal par no tener que loguear
    $doc_id = $this->getDocente($Documento);
    $datos_cursos = $this->getCursos($doc_id);
    //dd($datos_cursos);
    return view('campus.docente.principal', compact('datos_cursos'));

  }

  private function getDocente($Documento){

    $per_id = Persona::where('per_ci',$Documento)->pluck('per_id')->first();
    $doc_id = Docente::where('doc_per_id',$per_id)->pluck('doc_nro')->first();

    return $doc_id;

  }

  private function getCursos($doc_id){

    $Cursos = Dicta::where('doc_id',$doc_id)->get();
    $TemaId = RelTemaDoc::where('doc_id',$doc_id)->pluck('tema_id')->first();

    $datos_cursos = [];

    foreach ($Cursos as $Curso) {
        $Modulo = Modulo::where('modu_id',$Curso->modu_id)->first();
        $Grado  = Grado::where('gra_id',$Curso->gra_id)->first();
        $Tema   = Tema::where('tema_id',$TemaId)->first();

        $dicta_id       = $Curso->dicta_id;
        $modu_id      = $Curso->modu_id;
        $gra_id       = $Curso->gra_id;
        $Titulo       = $Grado->gra_nro.'º - '.$Modulo->modu_nombre;
        $Descripcion  = $Modulo->modu_descripcion;
        $es_cur_corto = 'false';
        $Fch_ini      = $Curso->dicta_fch_ini;
        $Fch_fin      = $Curso->dicta_fch_fin;

        if (isset($Tema)){
          if ($Tema->tema_es_cur_corto){
            $Titulo         = $Tema->tema_nombre;
            $Descripcion    = $Tema->tema_descripcion;
            $es_cur_corto   = $Tema->tema_es_cur_corto;
            $Fch_ini        = $Tema->tema_fch_ini;
            $Fch_fin        = $Tema->tema_fch_fin;
          }
        }// FIN -isset($Tema)

        $PorcentajeCurso =  $this->getPorcentCurso($Fch_ini,$Fch_fin);

        $item_datos_cursos = [];
        $item_datos_cursos =
        [
          'dicta_id' => $dicta_id,
          'modu_id' => $modu_id,
          'gra_id' => $gra_id,
          'titulo' => $Titulo,
          'porcentaje_curso' => $PorcentajeCurso,
          'descripcion' => $Descripcion,
          'es_cur_corto' => $es_cur_corto
        ];
        $datos_cursos = array_add($datos_cursos,$Curso->dicta_id,$item_datos_cursos); //Agrego una coleccion de arrays

    } //Fin foreach

    return $datos_cursos;

  }//Fin Function getCursos


  private function getPorcentCurso($Fch_ini,$Fch_fin){

    $now = Carbon::now();
    $Fch_ini = Carbon::createFromFormat('Y-m-d', $Fch_ini);
    $Fch_fin = Carbon::createFromFormat('Y-m-d', $Fch_fin);
    $PorcentajeCurso = 0;
    $TotalDiasCurso = 0;
    $DiasTranscurridos = 0;

    if (isset($Fch_ini) && isset($Fch_fin)){
      $TotalDiasCurso     = $Fch_ini->diffInDays($Fch_fin);
      $DiasTranscurridos  = $Fch_ini->diffInDays($now);
      $PorcentajeCurso    = ''.intval(($DiasTranscurridos*100)/$TotalDiasCurso).'%';
    }else{
      $PorcentajeCurso = '0'.'%';
    }

    return $PorcentajeCurso;

  }//Fin Function getPorcentCurso





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
