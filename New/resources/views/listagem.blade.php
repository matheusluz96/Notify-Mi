@extends('principal')

@section('conteudo')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Listagem de Produtos</h1>
    </div>
</div>
<!-- \1° row -->
<!-- 2° row -->
    @if(old('nome'))
        <div class="row">
            <div class="alert alert-success">
                Produto <strong>{{ old('nome') }}</strong> adicionado com sucesso !
            </div>
        </div>
    @endif
<!-- \2° row -->
<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Tamanho</th>
            <th>Categoria</th>
            <th></th>
        </tr>
    </thead>
    @foreach($produtos as $p)
        <tr class="{{ $p->quantidade <= 1 ? 'danger' : ''}}">
            <td>{{$p->nome}}</td>
            <td>{{$p->valor}}</td>
            <td>{{$p->descricao}}</td>
            <td>{{$p->quantidade}}</td>
            <td>{{$p->tamanho}}</td>
            <td>{{$p->categoria->nome}}</td>
            <td><a href="/produtos/mostra/{{$p->id}}">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </a>
            </td>
            <td><a href="/produtos/remove/{{$p->id}}">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
    @endforeach
</table>
@stop