@extends('layouts.principal')
@section('conteudo')
<!-- 1° row -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Cadastro de Técnico</h1>
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
    <form class="form-horizontal" action="/notifymi/tecnicos/adiciona" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

        <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-4">
                <input type="text" name="nome" value="{{ old('nome') }}" class="form-control" id="nome">
                <span class="help-block"><?php echo $errors->first('nome'); ?></span>
            </div>
        </div> 

        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-4">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email">
                <span class="help-block"><?php echo $errors->first('email'); ?></span>
            </div>
        </div> 
        <div class="form-group {{ $errors->has('cpf') ? 'has-error' : ''}}">
            <label for="cpf" class="col-sm-2 control-label">CPF</label>
            <div class="col-sm-4">
                <input type="numeric" name="cpf" value="{{ old('cpf') }}" class="form-control" id="cpf">
                <span class="help-block"><?php echo $errors->first('cpf'); ?></span>
            </div>
        </div> 
        <div class="form-group {{ $errors->has('cidade') ? 'has-error' : ''}}">
            <label for="cidade" class="col-sm-2 control-label">Cidade</label>
            <div class="col-sm-4">
                <input type="text" name="cidade" value="{{ old('cidade') }}" class="form-control" id="cidade" placeholder="Opcional">
                <span class="help-block"><?php echo $errors->first('cidade'); ?></span>
            </div>
        </div> 
        <div class="form-group {{ $errors->has('bairro') ? 'has-error' : ''}}">
            <label for="bairro" class="col-sm-2 control-label">Bairro</label>
            <div class="col-sm-4">
                <input type="text" name="bairro" value="{{ old('bairro') }}" class="form-control" id="bairro"  placeholder="Opcional">
                <span class="help-block"><?php echo $errors->first('bairro'); ?></span>
            </div>
        </div> 
        <div class="form-group {{ $errors->has('rua') ? 'has-error' : ''}}">
            <label for="rua" class="col-sm-2 control-label">Rua</label>
            <div class="col-sm-4">
                <input type="text" name="rua" value="{{ old('rua') }}" class="form-control" id="rua"  placeholder="Opcional">
                <span class="help-block"><?php echo $errors->first('rua'); ?></span>
            </div>
        </div> 
        <div class="form-group {{ $errors->has('telefone1') ? 'has-error' : ''}}">
            <label for="telefone1" class="col-sm-2 control-label">Telefone 1 </label>
            <div class="col-sm-4">
                <input type="text" name="telefone1" value="{{ old('telefone1') }}" class="form-control" id="telefone1">
                <span class="help-block"><?php echo $errors->first('telefone1'); ?></span>
            </div>
        </div> 
        <div class="form-group {{ $errors->has('telefone2') ? 'has-error' : ''}}">
            <label for="telefone2" class="col-sm-2 control-label">Telefone 2</label>
            <div class="col-sm-4">
                <input type="text" name="telefone2" value="{{ old('telefone2') }}" class="form-control" id="telefone2"  placeholder="Opcional">
                <span class="help-block"><?php echo $errors->first('telefone2'); ?></span>
            </div>
        </div> 
        <div class="form-group {{ $errors->has('observacao') ? 'has-error' : ''}}">
            <label for="observacao" class="col-sm-2 control-label">Observação</label>
            <div class="col-sm-4">
                <textarea class="form-control"  placeholder="Opcional" name="observacao" id="observacao">{{ old('observacao') }}</textarea>
                <span class="help-block"><?php echo $errors->first('observacao'); ?></span>
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