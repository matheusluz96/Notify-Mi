<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Funcionario;
use App\Http\Requests\PedidoRequest;

class PedidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('autorizador');
    }

    public function lista()
    {
        $pedidos = Pedido::all();

        return view('Pedido/lista_pedidos')->with('pedidos', $pedidos);
    }

    public function cadastro()
    {
        return view('Pedido/cadastro_pedidos')->with('funcionarios', Funcionario::all());
    }

    public function adiciona(PedidoRequest $request)
    {
        Pedido::create($request->all());

        $cadastro = true;

        return redirect('/notifymi/pedidos')->with('cadastro', $cadastro);
    }
}
