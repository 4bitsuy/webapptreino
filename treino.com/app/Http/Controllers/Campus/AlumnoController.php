<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\CollectionCollection;
use App\Alumno;
use App\Persona;

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
    $personas = Persona::where('per_ci',$Documento)->first();
    $alumnos = $personas->alumno;


  }






}
