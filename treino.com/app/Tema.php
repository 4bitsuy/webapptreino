<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    //
    protected $table = 'tema';
    protected $primaryKey = 'tema_id';

    protected $fillable = ['tema_nombre', 'tema_descripcion', 'tema_es_cur_corto'];

    public function relTemaModulo(){
      return $this->hasMany('App\RelTemaModulo', 'tema_id', 'tema_id');
    }

}
