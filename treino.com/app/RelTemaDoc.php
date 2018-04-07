<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelTemaDoc extends Model
{
    protected $table = 'reltemadoc';
    protected $primaryKey = 'reltemadoc_id';

    protected $fillable = ['tema_id', 'doc_id'];

    public function tema(){
        return $this->belongsToMany('App\Tema', 'tema_id');
    }

    public function docente(){
        return $this->belongsTo('App\Docente', 'doc_id');
    }
}
