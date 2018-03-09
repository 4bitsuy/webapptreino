<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
  protected $table = 'grado';

  protected $primaryKey = 'gra_id';

  protected $fillable = ['gra_nro', 'gra_descripcion', 'gra_fch_ini', 'gra_fch_fin', 'gra_estado'];

  public function cursa(){
    return $this->hasOne('App\Cursa','gra_id','gra_id');
  }

  public function lista(){
    return $this->hasOne('App\Lista','gra_id','gra_id');
  }

  public function relGraMod(){
    return $this->hasMany('App\RelGraMod','gra_id','gra_id');
  }

}
