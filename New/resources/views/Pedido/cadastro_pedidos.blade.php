@extends('layouts.principal')
@section('conteudo')

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Novo Pedido</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
 @if (count($errors) > 0)
    <div class="alert alert-danger">
        Corrija o(s) erro(s) abaixo !
    </div>
@endif
<!-- /2° row -->
<!-- 3° row -->
<div class="row">
    <form class="form-horizontal" action="/notifymi/pedidos/adiciona" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

        <div class="form-group">
            <label for="funcionario" class="col-sm-2 control-label">Funcionario responsável</label>
            <div class="col-sm-4">
                <select name="funcionario_id" class="form-control" id="funcionario">
                    @foreach($funcionarios as $funcionario)
                        <option value="{{$funcionario->id}}">{{$funcionario->nome}}</option>
                    @endforeach
                </select>
            </div>
        </div> 

        <div class="form-group {{ $errors->has('produto') ? 'has-error' : ''}}">
            <label for="produto" class="col-sm-2 control-label">Produto</label>
            <div class="col-sm-4">
                <input type="text" name="produto" value="{{ old('produto') }}" class="form-control" id="produto">
                <span class="help-block"><?php echo $errors->first('produto'); ?></span>
            </div>
        </div> 
        <div class="form-group {{ $errors->has('defeito') ? 'has-error' : ''}}">
            <label for="defeito" class="col-sm-2 control-label">Defeito</label>
            <div class="col-sm-4">
                <textarea class="form-control"  placeholder="Opcional" name="defeito" id="defeito">{{ old('defeito') }}</textarea>
                <span class="help-block"><?php echo $errors->first('defeito'); ?></span>
            </div>
        </div> 
        <div class="form-group {{ $errors->has('valor') ? 'has-error' : ''}}">
            <label for="valor" class="col-sm-2 control-label">valor</label>
            <div class="col-sm-4">
                <input type="numeric" name="valor" value="{{ old('valor') }}" class="form-control" id="valor" placeholder="Opcional">
                <span class="help-block"><?php echo $errors->first('valor'); ?></span>
            </div>
        </div>  
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Adicionar</button>
                <a class="btn btn-primary" href="/notifymi/pedidos/">Voltar</a>
            </div>
        </div>
    </form>
</div>
                <!-- /.row -->

@stop