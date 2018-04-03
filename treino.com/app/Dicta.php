<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dicta extends Model
{
  protected $table = 'dicta';
  protected $primaryKey = 'dicta_id';
  protected $fillable = ['gra_id', 'modu_id', 'doc_id', 'dicta_estado','dicta_fch_ini', 'dicta_fch_fin'];


  public function grado(){
    return $this->belongsTo('App\Grado','gra_id');
  }
  public function modulo(){
    return $this->belongsTo('App\Modulo','modu_id');
  }
  public function docente(){
     return $this->belongsTo('App\Docente','doc_nro');
  }
}
