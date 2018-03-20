<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use App\Http\Requests\TemaStoreRequest;
use App\Http\Requests\TemaUpdateRequest;

use App\Http\Controllers\Controller;

use App\Tema;
use App\RelTemaModulo;
use App\Modulo;
use App\RelGraMod;
use App\Grado;

class TemaController extends Controller
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
      $temas = Tema::orderBy('tema_id', 'DESC')->paginate();

      return view('campus.temas.index', compact('temas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campus.temas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TemaStoreRequest $request)
    {
        $temas = Tema::create($request->all());

        $modulos = $request->modulo;
        if (isset($modulos)) {

            for ($i=0; $i < count($modulos); $i++) {
              $relTemaModulo = new RelTemaModulo(['modu_id' => $modulos[$i]]);

              $temas->relTemaModulo()->save($relTemaModulo);
            }
        }

        return redirect()->route('tema.edit', $temas->tema_id)
              ->with('info', 'Tema creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tema = Modulo::find($id);

        return view('campus.temas.show', compact('tema'));
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
