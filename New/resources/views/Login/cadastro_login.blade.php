<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Notify-Mi Cadastro</title>

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Social Buttons CSS -->
    <link href="/vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">

</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-panel panel panel-default">
                    <div class="panel-body">
                        <img src="../media/logoh.png" width="475" title="Notify-Mi" alt="Notify-Mi" class="img-responsive center-block" />
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nome de Exibição" name=name autofocus>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name=e-mail autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-7">
                                        <label class="radio-inline"> <input type="radio" name="sexo" id="Masculino" value="masc" checked> Masculino </label>
                                        <label class="radio-inline"> <input type="radio" name="sexo" id="Feminino" value="fem"> Feminino </label>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <a href="cadastroconcluido.html" class="btn btn-success btn-social btn-block">
                                    <i class="fa fa-edit"></i> Cadastrar
                                </a>
                                <a href="login.html" class="btn btn-info btn-social btn-block">
                                    <i class="fa fa-sign-in"></i> Voltar para Login
                                </a>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/dist/js/sb-admin-2.js"></script>

</body>

</html>
