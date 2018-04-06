<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelGraMod extends Model
{

    protected $table = 'relgramod';
    protected $primaryKey = 'relgramod_id';

    protected $fillable = ['gra_id', 'modu_id'];

    public function Grado(){
      return $this->belongsToMany('App\Grado', 'gra_id');
    }

    public function Modulo(){
      return $this->belongsToMany('App\Modulo', 'modu_id');
    }

}
