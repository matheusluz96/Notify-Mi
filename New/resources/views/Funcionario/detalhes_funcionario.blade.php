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

            <p class="form-control-static" name = "nome"></p>

          </div>

          <div class="form-group">
            <label>Email:</label>
            <p class="form-control-static" name = "email"></p>
          </div>



          <div class="form-group">
            <label>CPF:</label>
            <p class="form-control-static" name = "CPF"></p>
          </div>


            <div class="form-group">
              <label>Bairro:</label>
              <p class="form-control-static" name = "bairro"></p>
            </div>


          <!-- NAO DEVERIA TER UM /FORM NESTA LINHA???? -->

        </div>
        <!-- /1° row -->

        <!-- 2° row -->
        <div class="row">
          <div class="col-sm-5">



              <div class="form-group">
                <label>Telefone de Contato 1:</label>
                <p class="form-control-static" name = "Telefone1"></p>
              </div>



              <div class="form-group">
                <label>Telefone de Contato 2:</label>
                <p class="form-control-static" name = "Telefone2"></p>
              </div>


              <div class="form-group">
                <label>Cidade:</label>
                <p class="form-control-static" name = "cidade"></p>
              </div>



              <div class="form-group">
                <label>Rua:</label>
                <p class="form-control-static" name = "rua"></p>
              </div>
            </form>

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
