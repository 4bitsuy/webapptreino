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

}
