<?php

use app\Usuario;

Route::get('usuarios', function(){
  $usuarios = Usuario::all();
  dd($usuarios);
});
