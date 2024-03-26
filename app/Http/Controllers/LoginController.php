<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Helpers\IL3Helper as il3;

class LoginController extends Controller
{
   public function index(){
    return Inertia::render('login/Login');
   }

   public function store(Request $request){
    $registros =il3::registros("SELECT * FROM euk_dat_usuario WHERE USUARIO='$request->usuario'");
    dd($registros);
   }
}