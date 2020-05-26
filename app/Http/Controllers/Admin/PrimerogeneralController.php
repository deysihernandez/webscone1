<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrimerogeneralController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
   }

   public function getGeneral(){
       return view('admin.primerogeneral.general');
   }
    
   public function getGeneralb(){
    return view('admin.primerogeneral2.generalb');
}

public function getGeneralc(){
    return view('admin.primerogeneral3.generalc');
}
//SEGUNDO GENERAL
   public function getGenerall(){
    return view('admin.segundogeneral.generall');
}

public function getGenerallb(){
    return view('admin.segundogeneral2.generallb');
}

public function getGenerallc(){
    return view('admin.segundogeneral3.generallc');
}
 
//NOTAS

public function getGeneralnotas(){
    return view('admin.primerogeneralnotas.generalnotas');
}
 
public function getGeneralbnotas(){
 return view('admin.primerogeneral2notas.generalbnotas');
}

public function getGeneralcnotas(){
 return view('admin.primerogeneral3notas.generalcnotas');
}
//SEGUNDO GENERAL
public function getGenerallnotas(){
 return view('admin.segundogeneralnotas.generallnotas');
}

public function getGenerallbnotas(){
 return view('admin.segundogeneral2notas.generallbnotas');
}

public function getGenerallcnotas(){
 return view('admin.segundogeneral3notas.generallcnotas');
}
}
