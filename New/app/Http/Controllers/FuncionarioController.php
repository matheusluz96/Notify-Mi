<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
  public function lista()
  {
      return view('Funcionario/lista_funcionario');
  }
  public function detalhes(){
    return view('Funcionario/detalhes_funcionario');
  }
}
