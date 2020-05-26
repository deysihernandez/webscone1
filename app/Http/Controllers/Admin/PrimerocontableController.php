<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrimerocontableController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
   }

   public function getContable(){
       return view('admin.primerocontable.contable');
   }

   public function getContablee(){
    return view('admin.segundocontable.contablee');
}

   public function getContableee(){
    return view('admin.tercerocontable.contableee');
}

//NOTAS
public function getContablenotas(){
    return view('admin.primerocontablenotas.contablenotas');
}

public function getContableenotas(){
 return view('admin.segundocontablenotas.contableenotas');
}

public function getContableeenotas(){
 return view('admin.tercerocontablenotas.contableeenotas');
}


}
