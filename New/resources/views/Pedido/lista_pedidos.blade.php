@extends('layouts.principal')

@section('css')

<!-- DataTables Responsive CSS -->
<link href="/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

@stop

@section('conteudo')


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
            <!--INICIO DA LINHA-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Lista de pedidos</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
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
            <!--FIM DA LINHA-->

  @stop

  @section('script')

  <!-- Data Tables -->
    <script src="/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

  <script>
  $(document).ready(function() {
    $('#dataTables-example').DataTable({
      responsive: true
    });
  });
  </script>

  @stop
