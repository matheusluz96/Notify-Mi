@extends('layouts.principal')
@section('conteudo')
<!-- 1° row -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Cadastro de Produto</h1>
    </div>
</div>
<!-- /1° row -->
<!-- 2° row -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        Corrija o(s) erro(s) abaixo !
    </div>
@endif
<!-- /2° row -->
<!-- 3° row -->
<div class="row">
    <form class="form-horizontal" action="/produtos/adiciona" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

        <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-4">
                <input type="text" name="nome" value="{{ old('nome') }}" class="form-control" id="nome">
                <span class="help-block"><?php echo $errors->first('nome'); ?></span>
            </div>
        </div> 

        <div class="form-group {{ $errors->has('valor') ? 'has-error' : ''}}">
            <label for="valor" class="col-sm-2 control-label">Valor</label>
            <div class="col-sm-4">
                <input type="number" name="valor" value="{{ old('valor') }}" class="form-control" id="valor">
                <span class="help-block"><?php echo $errors->first('valor'); ?></span>
            </div>
        </div> 
        <div class="form-group {{ $errors->has('quantidade') ? 'has-error' : ''}}">
            <label for="quantidade" class="col-sm-2 control-label">Quantidade </label>
            <div class="col-sm-4">
                <input type="number" name="quantidade" value="{{ old('quantidade') }}" class="form-control" id="quantidade">
                <span class="help-block"><?php echo $errors->first('quantidade'); ?></span>
            </div>
        </div> 
        <div class="form-group {{ $errors->has('tamanho') ? 'has-error' : ''}}">
            <label for="tamanho" class="col-sm-2 control-label">Tamanho</label>
            <div class="col-sm-4">
                <input type="text" name="tamanho" value="{{ old('tamanho') }}" class="form-control" id="tamanho">
                <span class="help-block"><?php echo $errors->first('tamanho'); ?></span>
            </div>
        </div> 
        <div class="form-group">
            <label for="categoria" class="col-sm-2 control-label">Categoria</label>
            <div class="col-sm-4">
                <select name="categoria_id" class="form-control" id="categoria">
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                    @endforeach
                </select>
                <span class="help-block"><?php echo $errors->first('categoria'); ?></span>
            </div>
        </div> 
        <div class="form-group {{ $errors->has('descricao') ? 'has-error' : ''}}">
            <label for="Descricao" class="col-sm-2 control-label">Descrição</label>
            <div class="col-sm-4">
                <textarea class="form-control" name="descricao" id="Descricao">{{ old('descricao') }}</textarea>
                <span class="help-block"><?php echo $errors->first('descricao'); ?></span>
            </div>
        </div>      
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
        </div>
    </form>
</div>
<!-- /3° row -->
@stop