<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use Hash;

use App\Http\Requests\ChangePasswordRequest;

use App\User;
use App\Persona;
use App\Rol;

class UserController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }

    public function perfil($nick){

      $user = User::where('name', $nick)->first();
      $relRolUsu = $user->relRolUsu()->first();
      $rol = Rol::where('id', $relRolUsu->id_rol)->first();

      $persona = Persona::where('per_usuingreso', $user->email)->first();

      return view('campus.perfil.home', compact(['user', 'rol', 'persona']));


    }

    public function cambioPass($nick){

      return view('campus.perfil.changePass');

    }

    public function updatePassword(ChangePasswordRequest $request){

      if (Hash::check($request->clave_actual, Auth::user()->password)){

        $user = new User;
        $user->where('email', Auth::user()->email)
             ->update(['password' => bcrypt($request->clave)]);

        return redirect('/campus')->with('info', 'Contraseña cambiada con éxito.');

      } else{
        return redirect('/campus')->with('info', 'No coincide la contraseña actual.');
      }
    }
}
