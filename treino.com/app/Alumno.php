<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumno';
    protected $primaryKey = 'alu_nro';

    public function personas(){
      return $this->belongsTo('App\Persona','per_id');
    }

}
