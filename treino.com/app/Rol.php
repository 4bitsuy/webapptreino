<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
  protected $table = 'rol';

  public function relRolUsu(){
    return $this->hasOne('App\RelRolUsu', 'id_rol', 'id');
  }
}
