<?php

namespace App\Http\Controllers;

use Request;
use Auth;

class LoginController extends Controller
{
  public function form()
  {
    return view('Login/login');
  }

  public function login()
  {
    $credenciais = Request::only('email', 'password');

    if(Auth::attempt($credenciais))
    {
      return view('/Cliente/cadastro_cliente');
    }
    return view('Login/invalido');

  }

  public function cadastro()
  {
    return view('Login/cadastro_login');
  }
  public function invalido()
  {
    return view('Login/invalido');
  }
}
