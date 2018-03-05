<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
  protected $table = 'nota';
  protected $primaryKey = 'not_id';

  public function modulo(){
    return $this->belongsTo('App\Modulo','modu_id');
  }
  public function alumno(){
     return $this->belongsTo('App\Alumno','alu_nro');
  }
}
