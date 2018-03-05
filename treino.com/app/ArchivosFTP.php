<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivosFTP extends Model
{
  protected $table = 'archivosftp';
  protected $primaryKey = 'arch_id';

  public function tema(){
    return $this->belongsTo('App\Tema', 'tema_id');
  }
}
