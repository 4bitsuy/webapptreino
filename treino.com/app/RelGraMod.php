<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelGraMod extends Model
{

    protected $table = 'relgramod';
    protected $primaryKey = 'relgramod_id';


      public function grado(){
        return $this->belongsTo('App\Grado', 'gra_id');
      }

      public function modulo(){
        return $this->belongsTo('App\Modulo', 'modu_id');
      }

}
