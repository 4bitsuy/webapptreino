<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumno';
    protected $primaryKey = 'alu_nro';

    public function personas()
    {
    return $this->hasOne('App\Persona','alu_per_id'/*,'alu_per_id'*/);
    }

}
