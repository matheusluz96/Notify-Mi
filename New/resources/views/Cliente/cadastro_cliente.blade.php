@extends('layouts.principal')
@section('conteudo')

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Cadastro de Clientes</h1>
    </div>
    <!-- 1° row -->
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      Informações do Cliente
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-sm-5">
          <form role="form">
            <div class="form-group">
              <label>Nome completo</label>
              <input class="form-control">
            </div>

            <div class="form-group">
              <label>CPF</label>
              <input class="form-control">
            </div>

            <div class="form-group">
              <label>E-mail do Cliente</label>
              <input class="form-control">
            </div>
<!-- NAO DEVERIA TER UM /FORM NESTA LINHA???? -->
        </div>
          <!-- /1° row -->

          <!-- 2° row -->
          <div class="row">
          <div class="col-sm-5">
            <form role="form">
              <div class="form-group">
                <label>Endereço</label>
                <input class="form-control">
              </div>
            </form>

              <form role="form">
                <div class="form-group">
                  <label>Telefone de Contato 1</label>
                  <input class="form-control">
                </div>
              </form>
                <div class="form-group">
                  <label>Telefone de Contato 2</label>
                  <input class="form-control" placeholder="Opcional">
                </div>
              </div>
            </div>
            <!-- /2° row -->

          </div>
          <div class="row">
            <div class="col-sm-5">

              <a href="#" class="btn btn-success" onclick="alert('Cadastro feito com sucesso!');">

                  <i class=""></i> Cadastrar
              </a>
              <a href="#" class="btn btn-danger">
                  <i class=""></i> Cancelar
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