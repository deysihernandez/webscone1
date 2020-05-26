<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusquedaresueltaController extends Controller
{
    public function getSearch(){
        return view('connect.search');
    }

    public function getBusquedaresuelta(){
        return view('connect.busquedaresuelta');
    }

   
}
