<?php

namespace App\Http\Controllers\Campus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }

 public function index(Request $request){

   return view('campus.admin.principal');

 }
 
}
