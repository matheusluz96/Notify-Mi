@extends('layouts.principal')
@section('conteudo')

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cadastro de pedidos</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informações do Pedido
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form action="/notifymi/pedidos/cadastrado" method="post">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Técnico encarregado</label>
                                        <select class="form-control">
                                            <option value="zezinho">Zézinho</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Modelo do Produto</label>
                                        <input class="form-control">
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-sm-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Telefone de Contato 1</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Telefone de Contato 2</label>
                                            <input class="form-control" placeholder="Opcional">
                                        </div>
                                </div>
                            </form>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.row -->

@stop
