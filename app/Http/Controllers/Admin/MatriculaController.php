<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
   }

   public function getMatricula(){
       return view('admin.matricula1.matricula');
   }

   public function getDatosestudiantes(){
    return view('admin.datosestudiantes.datosestudiantes');
}

public function getInfo(){
    return view('admin.informacion.info');
}
}