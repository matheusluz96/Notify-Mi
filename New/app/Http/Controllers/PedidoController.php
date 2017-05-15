<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('autorizador');
    }

    public function lista()
    {
        return view('Pedido/lista_pedidos');
    }

    public function cadastro()
    {
        return view('Pedido/cadastro_pedidos');
    }
}
