<?php

namespace App\Http\Controllers;
use App\Alumno;


class AlumnoController extends Controller{

  public function index(){
    $alumnos = Alumno::get();
    dd($alumnos);

  }






}
