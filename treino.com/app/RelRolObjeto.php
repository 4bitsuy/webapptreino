<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelRolObjeto extends Model
{
  protected $table = 'relrolobjeto';
  protected $primaryKey = 'relrolobj_id';

  public function rol(){
    return $this->belongsTo('App\Rol', 'rol_id');
  }

  public function objeto(){
    return $this->belongsTo('App\Objeto', 'obj_id');
  }
}
