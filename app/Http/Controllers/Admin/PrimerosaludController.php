<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrimerosaludController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
   }

   public function getSalud(){
       return view('admin.primerosalud.salud');
   }

   public function getSaludd(){
    return view('admin.segundosalud.saludd');
}

public function getSaluddd(){
    return view('admin.tercerosalud.saluddd');
}
   
//NOTAS

public function getSaludnotas(){
    return view('admin.primerosaludnotas.saludnotas');
}

public function getSaluddnotas(){
 return view('admin.segundosaludnotas.saluddnotas');
}

public function getSaludddnotas(){
 return view('admin.tercerosaludnotas.saludddnotas');
}
}
