<?php

namespace App\Http\Controllers\Campus;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\RelRolUsu;
use App\Rol;

class CampusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

      $usuario = $this->getAuthUserInfo();
      $rol = $this->getRolFromUser($this->getAuthUserId());

      $this->setSessionUser($usuario, $rol);
      //Redirigir a una ruta
      if ($rol->nombre == 'admin'){
        return redirect()->route('admin.principal');
      }
      if ($rol->nombre == 'alumno'){
        return redirect()->route('alumno.principal');
      }
      if ($rol->nombre == 'docente'){
        return redirect()->route('docente.principal');
      }


    }

    private function getAuthUserId(){
      return Auth::id();
    }

    private function getAuthUserInfo(){
      return Auth::user();
    }

    private function getRolFromUser($id){
      $usuario = User::find($id);

      $relRolUsu = $usuario->relRolUsu;

      $rol = $relRolUsu->rol;

      return $rol;
    }

    private function setSessionUser($usuario, $rol){
      session(['usuId' => $usuario->id]);
      session(['usuMail' => $usuario->email]);
      session(['usuDocu' => $usuario->documento]);
      session(['usuName' => $usuario->name]);
      session(['usuRolId' => $rol->id]);
      session(['usuRol' => $rol->nombre]);
    }
}
