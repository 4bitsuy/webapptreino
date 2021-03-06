<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use App\Http\Requests\ModuloStoreRequest;
use App\Http\Requests\ModuloUpdateRequest;

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
        $modulos = Modulo::orderBy('modu_id', 'DESC')->paginate();

        return view('campus.modulos.index', compact('modulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campus.modulos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModuloStoreRequest $request)
    {
      $modulo = Modulo::create($request->all());

      $cursos = $request->grado;
      if (isset($cursos)){

        for ($i=0; $i < count($cursos); $i++) {
          $relGraMod = new RelGraMod(['gra_id' => $cursos[$i]]);

          $modulo->relGraMod()->save($relGraMod);
        }

      }

      return redirect()->route('modulo.edit', $modulo->modu_id)
            ->with('info', 'Módulo creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $modulo = Modulo::find($id);

      $relGraMods = $modulo->RelGraMod()->get();

      return view('campus.modulos.show', compact('modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $modulo = Modulo::find($id);

      return view('campus.modulos.edit', compact('modulo'));
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

    private function newRelGraMod($cursos){

    }
}
