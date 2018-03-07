<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
  protected $table = 'modulo';
  protected $primaryKey = 'modu_id';

  public function cursa(){
    return $this->hasOne('App\Cursa','modu_id','modu_id');
  }

  public function lista(){
    return $this->hasOne('App\Lista','modu_id','modu_id');
  }

  public function nota(){
    return $this->hasOne('App\Nota','modu_id','modu_id');
  }

  public function relTemaModulo(){
    return $this->hasOne('App\RelTemaModulo', 'modu_id', 'modu_id');
  }
  public function relGraMod(){
    return $this->hasOne('App\RelGraMod', 'modu_id', 'modu_id');
  }
}
