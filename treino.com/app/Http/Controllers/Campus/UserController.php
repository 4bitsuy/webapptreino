<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\ResetsPasswords;

class UserController extends Controller
{
    // use ResetsPasswords;

    public function perfil($nick){
      return view('campus.perfil');
    }

    public function cambioPass($nick){
      return view('campus.cambioPass');
    }
}
