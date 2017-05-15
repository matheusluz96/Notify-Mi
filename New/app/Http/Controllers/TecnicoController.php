<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TecnicoController extends Controller
{
    public function lista()
    {
        return view('Funcionario/lista_tecnico');
    }
}
