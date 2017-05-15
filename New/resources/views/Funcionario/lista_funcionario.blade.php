@extends('layouts.principal')

@section('css')

  <!-- DataTables Responsive CSS -->
  <link href="/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

  <!-- DataTables CSS -->
  <link href="/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

@stop

@section('conteudo')

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Funcionarios</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             <div class="row">
                <a class="btn btn-success" href="/notifymi/pedidos/cadastro">Novo</a>
             </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>Celular</th>
                                        <th>CPF</th>
                                        <th>E-mail</th>
                                        <th>Cargo</th>
                                      </tr>

                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Sonic</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Gerente</td>

                                      </tr>

                                      <tr >
                                        <td>Eggman</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Técnico</td>

                                      </tr>

                                      <tr>
                                        <td>Tails</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Atendente</td>
                                      </tr>

                                </tbody>


            </div>
            <!-- /.row -->

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
