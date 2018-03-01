<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';
    protected $primaryKey = 'per_id';

    public function alumno(){
       return $this->hasOne('App\Alumno','alu_per_id','per_id');
     }


}
