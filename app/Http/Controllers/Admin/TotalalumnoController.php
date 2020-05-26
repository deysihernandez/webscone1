<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TotalalumnoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
   }

   public function getPrincipal(){
       return view('admin.totalalumno.principal');
   }
}
