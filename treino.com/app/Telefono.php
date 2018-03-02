<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
  protected $table = 'telefono';
  protected $primaryKey = 'tel_id';

  public function personas(){
    return $this->belongsTo('App\Persona','per_id');
  }
}
