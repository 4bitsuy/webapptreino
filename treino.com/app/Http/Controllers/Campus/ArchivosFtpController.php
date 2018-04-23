<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArchivosFtpController extends Controller
{
    public function descargar($archivo){
      //PDF file is stored under project/public/download/info.pdf
      $file= env('APP_LOC'). "/files/" .$archivo;

      $headers = [
                'Content-Type' => 'application/pdf',
             ];

      return response()->download($file, $archivo, $headers);
    }


}
