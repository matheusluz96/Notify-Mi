<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Http\Requests\FuncionarioRequest;

class FuncionarioController extends Controller
{
  public function lista()
  {
    $funcionarios = Funcionario::all();

    return view('Funcionario/lista_funcionario')->with('funcionarios', $funcionarios);
  }

  public function cadastro()
  {
      return view('Funcionario/cadastro_funcionario');
  }

  public function adiciona(FuncionarioRequest $request)
  {
      Funcionario::create($request->all());

      return redirect('/notifymi/funcionarios')->withInput();
  }

    public function detalhes(){
    return view('Funcionario/detalhes_funcionario');
  }
}
