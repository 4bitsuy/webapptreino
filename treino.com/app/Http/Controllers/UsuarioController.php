<?php


namespace App\Http\Controllers;

class UsuarioController extends Controller{
  $Usuarios = Usuario::get();
  dd($Usuarios );
  }
}
