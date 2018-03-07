<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
  protected $table = 'rol';

  public function relRolUsu(){
    return $this->hasOne('App\RelRolUsu', 'id_rol', 'id');
  }

  public function relRolObjeto(){
    return $this->hasMany('App\RelRolObjeto', 'rol_id', 'id');
  }
}
