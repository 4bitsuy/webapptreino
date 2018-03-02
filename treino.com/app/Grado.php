<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
  protected $table = 'grado';
  protected $primaryKey = 'gra_id';

  public function cursa(){
    return $this->hasOne('App\Cursa','gra_id','gra_id');
  }

  public function lista(){
    return $this->hasOne('App\Lista','gra_id','lis_id');
  }
}
