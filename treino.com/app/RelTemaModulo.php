<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelTemaModulo extends Model
{
  protected $table = 'reltemamodulo';
  protected $primaryKey = 'reltemamod_id';

  public function tema(){
    return $this->belongsTo('App\Tema', 'tema_id');
  }

  public function modulo(){
    return $this->belongsTo('App\Modulo', 'modu_id');
  }
}
