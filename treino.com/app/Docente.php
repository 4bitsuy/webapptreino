<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
  protected $table = 'docente';
  protected $primaryKey = 'doc_nro';

  public function personas(){
    return $this->belongsTo('App\Persona','per_id');
  }

  public function dicta(){
    return $this->hasMany('App\Dicta','doc_id','doc_nro');
  }

}
