<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
   }

   public function getRegister(){
       return view('admin.user2.register');
   }
}
