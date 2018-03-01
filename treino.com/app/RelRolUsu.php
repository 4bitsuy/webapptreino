<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelRolUsu extends Model
{
  protected $table = 'relrolusu';

  public function user(){
    return $this->belongsTo('App\User', 'id_usu');
  }

  public function rol(){
    return $this->belongsTo('App\Rol', 'id_rol');
  }
}
