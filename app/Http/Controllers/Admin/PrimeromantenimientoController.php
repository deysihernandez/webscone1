<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrimeromantenimientoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
   }

   public function getMantenimiento(){
       return view('admin.primeromantenimiento.mantenimiento');
   }

   public function getMantenimientoo(){
    return view('admin.segundomantenimiento.mantenimientoo');
}

public function getMantenimientooo(){
    return view('admin.terceromantenimiento.mantenimientooo');
}

//NOTAS

public function getMantenimientonotas(){
    return view('admin.primeromantenimientonotas.mantenimientonotas');
}

public function getMantenimientoonotas(){
 return view('admin.segundomantenimientonotas.mantenimientoonotas');
}

public function getMantenimientooonotas(){
 return view('admin.terceromantenimientonotas.mantenimientooonotas');
}
}
