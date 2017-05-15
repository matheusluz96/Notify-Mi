<!DOCTYPE html>
<html lang="pt">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Notify-Mi</title>

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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-panel panel panel-default">
                    <div class="panel-body">
                        <img src="/media/logoh.png" width="475" title="Notify-Mi" alt="Notify-Mi" class="img-responsive center-block" />
                    </div>
                    <div class="panel-body">
                    @if(isset($erro))
                            <div class="alert alert-danger" role="alert">Dados inválidos !</div>
                        @endif
                        <form role="form" action="/notifymi/login" method="post">
                            <fieldset>
                                <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuário ou E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Lembrar de mim
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
<!--                                <a href="perfil.html" class="btn btn-info btn-social btn-block">
                                    <i class="fa fa-sign-in"></i> Login
                                </a>-->

                                <button type="submit" class="btn btn-info btn-social btn-block"><i class="fa fa-sign-in"></i> Login</button>

                                <a href="/notifymi/cadastrar" class="btn btn-success btn-social btn-block">
                                    <i class="fa fa-edit"></i> Cadastrar
                                </a>
                                <a class="btn btn-block btn-social btn-facebook">
                                    <i class="fa fa-facebook"></i> Login com Facebook
                                </a>
                                <a class="btn btn-block btn-social btn-google-plus">
                                    <i class="fa fa-google-plus"></i> Login com Google+
                                </a>
                            </fieldset>

                        </form>

                    </div>
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
