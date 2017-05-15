@extends('layouts.principal')

@section('css')

  <!-- DataTables Responsive CSS -->
  <link href="/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

  <!-- DataTables CSS -->
  <link href="/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

@stop

@section('conteudo')

    @if(old('nome'))
        <div class="row">
            <div class="alert alert-success">
                Técnico <strong>{{ old('nome') }}</strong> adicionado com sucesso !
            </div>
        </div>
    @endif

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Técnicos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             <div class="row">
                <a class="btn btn-success" href="/notifymi/tecnicos/cadastro">Novo Técnico</a>
             </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="tabela_tecnicos">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Avaliação</th>
                                        <th>Telefone 1</th>
                                        <th>Telefone 2</th>
                                      </tr>

                                    </thead>
                                    <tbody>
                                      @foreach($tecnicos as $t)
                                        <tr>
                                            <td>{{$t->nome}}</td>
                                            <td>{{$t->email}}</td>
                                            <td>{{$t->avaliacao}}</td>
                                            <td>{{$t->telefone1}}</td>
                                            <td>{{$t->telefone2}}</td>
                                            <td><a href="/tecnicos/informacao/{{$t->id}}">
                                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                                </a>
                                            </td>
                                            <td><a href="/tecnicos/remove/{{$t->id}}">
                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


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
            $('#tabela_tecnicos').DataTable({
                responsive: true
            });
        });
    </script>

@stop