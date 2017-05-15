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
                    <h1 class="page-header">Funcionários</h1>
                </div>
            </div>
                    @if(old('nome'))
                        <div class="row">
                            <div class="alert alert-success">
                                Funcionário <strong>{{ old('nome') }}</strong> adicionado com sucesso !
                            </div>
                        </div>
                    @endif
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          <!--   <div class="row">
                <a class="btn btn-success" href="/notifymi/funcionarios/cadastro">Adicionar Funcionário</a>
             </div>
             //-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Celular</th>
                                        <th>Cargo</th>
                                        <th>Avaliação</th>
                                        <th></th>
                                      </tr>

                                    </thead>
                                    <tbody>
                                      @foreach($funcionarios as $f)
                                        <tr>
                                            <td>{{$f->nome}}</td>
                                            <td>{{$f->email}}</td>
                                            <td>{{$f->celular}}</td>
                                            <td>{{$f->cargo}}</td>
                                            <td>{{$f->avalilacao}}</td>
                                            <td><a href="/notifymi/funcionarios/detalhes/{{$f->id}}">
                                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                                </a>
                                                <a href="/notifymi/funcionarios/remove/{{$f->id}}">
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
