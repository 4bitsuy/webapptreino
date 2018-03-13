<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modulo;
use App\RelGraMod;
use App\Grado;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
      $this->middleware('auth');
    }
    
    public function index()
    {
        $modulos = Modulo::all();
        return view('campus.modulos.moduloGral')->with('modulos', $modulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grados = Grado::all();
        return view('campus.modulos.moduloCrud')->with('grados', $grados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $modu_nombre = $request->input('nombre');
      $modu_descripcion = $request->input('descripcion');
      $cursos = $request->input('curso');

      // validamos.
      $ok = true;

      if ($ok) {
        $modulo = new Modulo;
        $modulo->modu_nombre = $modu_nombre;
        $modulo->modu_descripcion = $modu_descripcion;

        foreach ($cursos as $curso) {
          $grado = Grado::find($curso);

        }

        $modulo->save();
        return redirect()->route('modulo.create');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
