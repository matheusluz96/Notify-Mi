@extends('layouts.principal')
@section('conteudo')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Detalhes funcionário</h1>
  </div>
  <!-- 1° row -->
</div>
<div class="panel panel-default">

  <div class="panel-body">
    <div class="row">
      <div class="col-sm-5">

        <form role="form">
          <div class="form-group">

            <label>Nome completo:</label>

            <p class="form-control-static">{{$funcionario->nome}}</p>

          </div>

          <div class="form-group">
            <label>Email:</label>
            <p class="form-control-static">{{$funcionario->email}}</p>
          </div>

          <div class="form-group">
            <label>Cargo:</label>
            <p class="form-control-static">{{$funcionario->cargo}}</p>
          </div>

          <div class="form-group">
            <label>CPF:</label>
            <p class="form-control-static">{{$funcionario->cpf}}</p>
          </div>

          <div class="form-group">
            <label>Bairro:</label>
            <p class="form-control-static">{{$funcionario->bairro}}</p>
          </div>



        </div>
        <!-- /1° row -->

        <!-- 2° row -->
        <div class="row">
          <div class="col-sm-5">



            <div class="form-group">
              <label>Celular:</label>
              <p class="form-control-static" name = "celular">{{$funcionario->celular}}</p>
            </div>



            <div class="form-group">
              <label>Telefone:</label>
              <p class="form-control-static" name = "telefone">{{$funcionario->telefone}}</p>
            </div>


            <div class="form-group">
              <label>Cidade:</label>
              <p class="form-control-static" name = "cidade">{{$funcionario->cidade}}</p>
            </div>



            <div class="form-group">
              <label>Rua:</label>
              <p class="form-control-static" name = "rua">{{$funcionario->rua}}</p>
            </div>

            <div class="form-group">
              <label>Observação:</label>
              <p class="form-control-static" name = "rua">{{$funcionario->observacao}}</p>
            </div>
          </form>

        </div>
      </div>
      <!-- /2° row -->

    </div>
    <div class="row">
      <div class="col-sm-5">

<!--        <a href="#" class="btn btn-warning" onclick="alert('Cadastro feito com sucesso!');">

          <i class=""></i> Alterar
        </a>-->
<!--        <a href="#" class="btn btn-danger">
          <i class=""></i> Cancelar
        </a>-->

        <a href="/notifymi/funcionarios" class="btn btn-primary">
          <i class=""></i> Voltar
        </a>

        <!-- /.col-lg-6 (nested) -->
      </div>
    </div>
    <!-- /.row (nested) -->
  </div>
  <!-- /.panel-body -->
</div>
<!-- /.row -->


@stop
