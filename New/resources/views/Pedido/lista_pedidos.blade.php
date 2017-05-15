@extends('layouts.principal')

@section('css')

<!-- DataTables Responsive CSS -->
<link href="/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

<!-- DataTables CSS -->
<link href="/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

@stop

@section('conteudo')

<<<<<<< HEAD
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pedidos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @if(isset($cadastro))
                <div class="row">
                    <div class="alert alert-success">
                        Pedido adicionado com sucesso !
                    </div>
                </div>
            @endif
             <div class="row">
                <a class="btn btn-success" href="/notifymi/pedidos/cadastro">Novo pedido</a>
             </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Funcionário</th>
                                        <th>Produto</th>
                                        <th>Defeito</th>
                                        <th>Valor</th>
                                        <th></th>
                                      </tr>

                                    </thead>
                                    <tbody>
                                        @foreach($pedidos as $p)
                                        <tr>
                                            <td>{{$p->funcionario->nome}}</td>
                                            <td>{{$p->produto}}</td>
                                            <td>{{$p->defeito}}</td>
                                            <td>{{$p->valor}}</td>
                                            <td><a href="/notifymi/pedidos/detalhes/{{$p->id}}">
                                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                                </a>
                                                <a href="/notifymi/pedidos/remove/{{$p->id}}">
                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
=======
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Pedidos</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
>>>>>>> origin/master

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <!-- /.panel-heading -->
      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
            <tr>
              <th>Técnico</th>
              <th>Aparelho</th>
              <th>Defeito</th>
              <th>Valor</th>
            </tr>

          </thead>
          <tbody>
            <tr class="success">
              <td>Carlinhos</td>
              <td>Iphone7</td>
              <td>Tela trincada</td>
              <td>R$ 799</td>
            </tr>
            <tr class="warning">
              <td>Carlinhos</td>
              <td>Galaxy s8</td>
              <td>Não carrega</td>
              <td>Indeterminado</td>
            </tr>
            <tr class="info">
              <td>Carlinhos</td>
              <td>Zenfone 2</td>
              <td>Tela trincada</td>
              <td>R$ 1799</td>
            </tr>
            <tr class="danger">
              <td>Carlinhos</td>
              <td>Iphone7</td>
              <td>Tela trincada</td>
              <td>R$ 652</td>
            </tr>
          </tbody>




        </div>
      </div>
    </div>
  </div>


  @stop

  @section('script')

  <!-- DataTables JavaScript -->
  <script src="/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
  <script src="/vendor/datatables-responsive/dataTables.responsive.js"></script>

  <script>
  $(document).ready(function() {
    $('#dataTables-example').DataTable({
      responsive: true
    });
  });
  </script>

  @stop
