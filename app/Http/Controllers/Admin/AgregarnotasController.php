<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgregarnotasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
   }

   public function getNotas(){
       return view('admin.agregarnotas.notas');
   }

   public function getNotass(){
    return view('admin.notas.notass');
}
}
