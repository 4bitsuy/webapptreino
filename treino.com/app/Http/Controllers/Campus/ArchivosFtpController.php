<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use App\Http\Requests\ArchivosFTPStoreRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\ArchivosFTP;


class ArchivosFtpController extends Controller
{
    public function __construct(){
       $this->middleware('auth');
    }

    public function descargar($archivo){
      //PDF file is stored under project/public/download/info.pdf
     $file= env('APP_LOC')."/file/".$archivo;

      $headers = [
                'Content-Type' => 'application/pdf',
             ];

      return response()->download($file, $archivo, $headers);
    }

    public function descargarPrograma($archivo){
      //PDF file is stored under project/public/download/info.pdf
     $file= env('APP_LOC')."/programa/".$archivo;

      $headers = [
                'Content-Type' => 'application/pdf',
             ];

      return response()->download($file, $archivo, $headers);
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArchivosFTPStoreRequest $request)
    {
        $archivosFTP = ArchivosFTP::create($request->all());

        //Archivos
        if ($request->file('arch_ruta')) {
          //==============================================
          //lo siguiente significa:
          //Guarda el archivo ($request->file('arch_ruta')) en la carpeta 'files' en el storage publico
          // $path = Storage::disk('public')->put('file', $file);
          //==============================================
          //==============================================
          $file = $request->file('arch_ruta');
          $name = 'trinoarch_'.time().'.'.$file->getClientOriginalExtension();
          $path = env('APP_LOC')."/file/";
          $file->move($path,$name);

          $archivosFTP->fill(['arch_ruta' => $name])->save();

        }

        // $modulos = $request->modulo;
        // if (isset($modulos)) {
        //
        //     for ($i=0; $i < count($modulos); $i++) {
        //       $relTemaModulo = new RelTemaModulo(['modu_id' => $modulos[$i]]);
        //
        //       $temas->relTemaModulo()->save($relTemaModulo);
        //     }
        // }
        //
        return redirect()->route('cursos.curso', $archivosFTP->tema_id)
              ->with('info', 'Archivo subido con éxito');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArchivosFTPUpdateRequest $request, $id)
    {
        $archivosFTP = ArchivosFTP::find($id);
        $archivosFTP->fill($request->all())->save();

        //Archivos
        if ($request->file('arch_ruta')) {
          $path = Storage::disck('public')->put('ArchivosFTP', $request->file('file'));
          $archivosFTP->fill(['arch_ruta' => asset($path)])->save();
        }


        return redirect()->route('cursos.curso', $archivosFTP->arch_id)
              ->with('info', 'Archivo actualizado con éxito');

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
