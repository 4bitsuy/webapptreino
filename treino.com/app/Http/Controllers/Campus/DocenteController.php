<?php

namespace App\Http\Controllers\Campus;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\CollectionCollection;
use App\Docente;
use App\Persona;

class DocenteController extends Controller
{

  public function index(Request $request){

    $Documento = $request->session()->get('usuDocu');
    $personas = Persona::where('per_ci',$Documento)->first();
    $alumnos = $personas->alumno;
    
  }

}
