<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\CollectionCollection;
use App\Docente;
use App\Persona;

class AlumnoController extends Controller{

  public function index(Request $request){

    //RS -> retorno datos del docente en session segun ci
    $Documento = $request->session()->get('usuDocu');
    $personas = Persona::where('per_ci',$Documento)->first();
    $docentes = $personas->docente;

  }

}
