<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\CollectionCollection;
use App\Alumno;
use App\Persona;

class AlumnoController extends Controller{

  public function index(){

    $personas = Persona::all();

    foreach ($personas as $persona) {
      $alumno = new Alumno;

  //$persona = Persona::find(1/* Aca va variable seguro */);

      $alumno = $persona->personas()->save($alumno);
    }

    $alumnos = Alumno::get();
    dd($alumnos);

  }






}
