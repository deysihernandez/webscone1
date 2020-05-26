<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrimerosoftwareController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
   }

   public function getSoftware(){
       return view('admin.primerosoftware.software');
   }

   public function getSoftwaree(){
    return view('admin.segundosoftware.softwaree');
}

public function getSoftwareee(){
    return view('admin.tercerosoftware.softwareee');
}

//NOTAS

public function getSoftwarenotas(){
    return view('admin.primerosoftwarenotas.softwarenotas');
}

public function getSoftwareenotas(){
 return view('admin.segundosoftwarenotas.softwareenotas');
}

public function getSoftwareeenotas(){
 return view('admin.tercerosoftwarenotas.softwareeenotas');
}
}
