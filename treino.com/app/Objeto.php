<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    //
    protected $table = 'objeto';
    protected $primaryKey = 'obj_id';

    public function relRolObjeto(){
      return $this->hasMany('App\RelRolObjeto', 'obj_id', 'obj_id');
    }
}
