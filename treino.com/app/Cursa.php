<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursa extends Model
{
  protected $table = 'cursa';
  protected $primaryKey = 'cur_id';
  protected $fillable = ['gra_id', 'modu_id', 'alu_id', 'cur_estado','cur_fch_ini', 'cur_fch_fin'];


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
