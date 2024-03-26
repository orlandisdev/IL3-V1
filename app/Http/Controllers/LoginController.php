<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

use App\Helpers\IL3Helper as il3;

class LoginController extends Controller
{
   public function index(){
    return Inertia::render('login/Login');
   }

   public function store(Request $request){
    $user =il3::registros("SELECT * FROM euk_dat_usuario WHERE USUARIO='$request->usuario'");
   if($user){
      return redirect(route('/'));
   }

   return redirect()->back();
   }
}