<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    //
    protected $table = 'tema';
    protected $primaryKey = 'tema_id';

    public function relTemaModulo(){
      return $this->hasOne('App\RelTemaModulo', 'tema_id', 'tema_id');
    }

}
