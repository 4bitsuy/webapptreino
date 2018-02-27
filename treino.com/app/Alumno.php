<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumno';

    public function personas()
    {
      return $this->belongsTo('App\Persona');
    }

}
