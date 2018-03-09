<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
  protected $table = 'modulo';
  protected $primaryKey = 'modu_id';

  protected $fillable = ['modu_nombre', 'modu_descripcion'];

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
    return $this->hasMany('App\RelGraMod', 'modu_id', 'modu_id');
  }
}
