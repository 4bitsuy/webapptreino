<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use App\Http\Requests\GradoStoreRequest;
use App\Http\Requests\GradoUpdateRequest;

use App\Http\Controllers\Controller;

use App\Grado;

class GradoController extends Controller
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
        $grados = Grado::orderBy('gra_nro', 'DESC')->orderBy('gra_id', 'DESC')->paginate();

        return view('campus.cursos.index', compact('grados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campus.cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GradoStoreRequest $request) {

        $gra_nro = $request->input('gra_nro');
        $gra_descripcion = $request->input('gra_descripcion');
        $gra_fch_ini = $this->getDateForDB($request->input('gra_fch_ini'));
        $gra_fch_fin = $this->getDateForDB($request->input('gra_fch_fin'));

        $gra_estado = 1;

        $grado = new Grado;

        $grado->gra_nro         = $gra_nro;
        $grado->gra_descripcion = $gra_descripcion;
        $grado->gra_fch_ini     = $gra_fch_ini;
        $grado->gra_fch_fin     = $gra_fch_fin;
        $grado->gra_estado      = $gra_estado;

        $grado->save();

        return redirect()->route('grado.edit', $grado->gra_id)
        ->with('info', 'Curso creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grado = Grado::find($id);

        return view('campus.cursos.show', compact('grado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $grado = Grado::find($id);

      return view('campus.cursos.edit', compact('grado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GradoUpdateRequest $request, $id)
    {
        $grado = Grado::find($id);

        $grado->fill($request->all())->save();

        return redirect()->route('grado.edit', $id)
        ->with('info', 'Curso modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grado = Grado::find($id)->delete();

        return back()->with('info', 'Curso '.$grado->gra_descripcion.' eliminado');
    }

    private function getDateForDB($strDate){
      $dataDate = date_parse($strDate);
      $fchFormat = $dataDate['year'].'-'.$dataDate['month'].'-'.$dataDate['day'];

      return $fchFormat;
    }
}
