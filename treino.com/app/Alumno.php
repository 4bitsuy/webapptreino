<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumno';
    protected $primaryKey = 'alu_nro';//,'alu_per_id'];

    public function personas(){
      return $this->belongsTo('App\Persona','per_id');
    }

    public function cursa(){
      return $this->hasMany('App\Cursa','alu_id','alu_nro');
    }

    public function lista(){
      return $this->hasMany('App\Lista','alu_id','alu_nro');
    }

    public function nota(){
      return $this->hasMany('App\Nota','alu_id','alu_nro');
    }
}
