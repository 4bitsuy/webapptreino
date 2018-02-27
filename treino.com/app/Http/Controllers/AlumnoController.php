<?php

namespace App\Http\Controllers;
use App\Alumno;
use App\Persona;

class AlumnoController extends Controller{

  public function index(){

    $alumno = new Alumno;
    $persona = Persona::find(1/* Aca va variable seguro */);

    $alumno = $persona->personas()->save($alumno);

    $alumnos = Alumno::get();
    dd($alumnos);

  }






}
