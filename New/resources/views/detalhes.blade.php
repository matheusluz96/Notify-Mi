@extends('layouts.principal')

@section('conteudo')

<h1>Detalhes do produto {{$p->nome}}</h1>

<ul>
    <li>
        {{$p->descricao}}
    </li>
</ul>

@stop