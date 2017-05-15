<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tecnico;

class TecnicoController extends Controller
{
    public function lista()
    {

        $tecnicos = Tecnico::all();

        return view('Funcionario/lista_tecnico')->with('tecnicos', $tecnicos);
    }
}
