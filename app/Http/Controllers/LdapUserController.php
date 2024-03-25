<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\Ldap\User;
use App\Ldap\Usuario;


class LdapUserController extends Controller
{
    public function index()
    {
     
        $users = Usuario::get();
        return view('ldap.users.index', ['users' => $users]);
    }
}
