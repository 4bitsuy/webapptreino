<?php

namespace App\Http\Controllers;
use App\Alumno;
use App\Persona;

class PersonaController extends Controller{

  public function index(){

    $persona = new Persona;

    $persona->per_ci = '50640349';
    $persona->per_pri_nombre  = 'Robert';
    $persona->per_pri_apellido  = 'Sini';

    $persona->save();
  //$persona = Persona::find(1/* Aca va variable seguro */);


  //  $alumno->save();
  //  $alumno = $persona->personas()->save($alumno);


    $persona = Persona::get();
    dd($persona);

  }






}
