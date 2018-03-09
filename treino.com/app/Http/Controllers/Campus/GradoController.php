<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Grado;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grados = Grado::all();

        return view('campus.cursos.cursosGral')->with('grados', $grados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campus.cursos.cursosCrud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {


        $gra_nro = $request->input('año');
        $gra_descripcion = $request->input('dsc');
        $dataDate = date_parse($request->input('inicio-date'));
        $gra_fch_ini = $dataDate['year'].'-'.$dataDate['month'].'-'.$dataDate['day'];
        $dataDate = date_parse($request->input('fin-date'));
        $gra_fch_fin = $dataDate['year'].'-'.$dataDate['month'].'-'.$dataDate['day'];
        $gra_estado = 1;

        // validamos.
        $ok = true;

        if ($ok) {
          $grado = new Grado;

          $grado->gra_nro         = $gra_nro;
          $grado->gra_descripcion = $gra_descripcion;
          $grado->gra_fch_ini     = $gra_fch_ini;
          $grado->gra_fch_fin     = $gra_fch_fin;
          $grado->gra_estado      = $gra_estado;

          $grado->save();
          return redirect()->route('grado.create');
        } else{
          return back()->withInput();
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
