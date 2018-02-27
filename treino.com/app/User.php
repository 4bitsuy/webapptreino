<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // ACA LE DIGO QUE LA PUTA TABLA SE LLAMA USUARIO!
    // y por que la clas se llama user?
    // MMMMMMMMMM PUEEEEEEEEEEEDE SEEEEEEEEEEEER...
    // jajjaja  de todas formas esta bien el prot
    // no igual ahora que pienso no deberia importar, igual pruebo
    //protected $table = 'usuario';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'name', 'email', 'clave', 'documento'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
