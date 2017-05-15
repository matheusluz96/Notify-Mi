<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tecnico;
use App\Http\Requests\TecnicoRequest;

class TecnicoController extends Controller
{
    public function lista()
    {

        $tecnicos = Tecnico::all();

        return view('Funcionario/lista_tecnico')->with('tecnicos', $tecnicos);
    }

    public function cadastro()
    {
        return view('Funcionario/cadastro_tecnico');
    }

    public function adiciona(TecnicoRequest $request)
    {
        Tecnico::create($request->all());

        return redirect('/notifymi/tecnicos')->withInput();
    }
}
