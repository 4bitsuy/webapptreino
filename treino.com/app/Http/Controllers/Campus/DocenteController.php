<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\CollectionCollection;
use Illuminate\Support\Collection;

use App\Http\Controllers\Controller;
use App\Traits\DatesTrait;
use Carbon\Carbon;

use App\Docente;
use App\Alumno;
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

}
