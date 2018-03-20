<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelTemaAlu extends Model
{
  protected $table = 'reltemaalu';
  protected $primaryKey = 'reltemaalu_id';

  protected $fillable = ['tema_id', 'alu_id'];

  public function tema(){
      return $this->belongsTo('App\Tema', 'tema_id');
  }

  public function alumno(){
      return $this->belongsTo('App\Alumno', 'alu_id');
  }
}
