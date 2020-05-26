<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
   }

   public function getForm(){
       return view('admin.nuevoestudiante.form');
   }
}
