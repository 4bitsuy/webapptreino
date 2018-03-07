<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursa extends Model
{
  protected $table = 'cursa';
  protected $primaryKey = 'cur_id';

  public function grado(){
    return $this->belongsTo('App\Grado','gra_id');
  }
  public function modulo(){
    return $this->belongsTo('App\Modulo','modu_id');
  }
  public function alumno(){
     return $this->belongsTo('App\Alumno','alu_nro');
  }
}
