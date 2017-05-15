<!DOCTYPE html>
<html lang="pt">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Notify-Mi Cadastro de Pedidos</title>

  @yield('css')

  <!-- Bootstrap Core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="/dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Notify-Mi</a>
      </div>
      <!-- /.navbar-header -->

      <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-messages">
            <li>
              <a href="#">
                <div>
                  <strong>Matheus Luz</strong>
                  <span class="pull-right text-muted">
                    <em>Hoje</em>
                  </span>
                </div>
                <div>Olha, uma mensagem</div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <div>
                  <strong>Rafael Bella</strong>
                  <span class="pull-right text-muted">
                    <em>Hoje</em>
                  </span>
                </div>
                <div>Olha, outra mensagem</div>
              </a>
            </li>
            <li class="divider"></li>
            <li>

            </li>
            <li class="divider"></li>
            <li>
              <a class="text-center" href="#">
                <strong>Ver mensagens</strong>
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
          </ul>
          <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-tasks">

            <li class="divider"></li>


            <li>
              <a class="text-center" href="#">
                <strong>Ver pedidos</strong>
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
          </ul>
          <!-- /.dropdown-tasks -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" >
            <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-alerts">
            <li>
              <a href="#">
                <div>
                  <i class="fa fa-comment fa-fw"></i> Novo comentário
                  <span class="pull-right text-muted small">Há 2 minutos</span>
                </div>
              </a>
            </li>
            <li class="divider"></li>





            <li>
              <a class="text-center" href="#">
                <strong>Ver alertas</strong>
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
          </ul>
          <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            {{ Auth::user()->name }}
            <i class="fa fa-user fa-fw"></i>
            <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="perfil.html"><i class="fa fa-user fa-fw"></i> Meu Perfil</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configurações</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Sair
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
          </ul>
          <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
      </ul>
      <!-- /.navbar-top-links -->

      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            <li class="sidebar-search">
              <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Pesquisa">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
              <!-- /input-group -->
            </li>

            <!-- menu lateral -->
          </li>
          <li>
            <a href="#"><i class="fa fa-home fa-fw"></i> Início</a>
          </li>
          <li>

            <a href="#"><i class="fa fa-wrench fa-fw"></i> Ferramentas<span class="fa arrow"></span></a>

            <ul class="nav nav-second-level">
              <li>
                <a href="#">Teste</a>
              </li>

              <li>
                <a>Funcionários <span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                  <li>
                    <a href="#">Cadastrar novo funcionário</a>
                  </li>
                  <li>
                    <a href="/notifymi/funcionarios/lista">Lista de funcionários</a>
                  </li>
                </ul>
                </li>
              <li>
                <a>Clientes <span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                  <li>
                    <a href="/notifymi/clientes/cadastro">Cadastrar novo cliente</a>
                  </li>
                  <li>
                    <a href="#">Lista de clientes</a>
                  </li>

                </ul>
                <!-- /.nav-third-level -->
              </li>

              <li>
                <a>Pedidos <span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                  <li>
                    <a href="#">Cadatrar novo pedido</a>
                  </li>
                  <li>
                    <a href="#">Lista de pedidos</a>
                  </li>

                </ul>

              </li>
            </ul>

          </li>
          <li>
            <a href="#"><i class="fa fa-files-o fa-fw"></i>Páginas Modelo<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="#">Página Vazia</a>
              </li>
              <li>
                <a href="#">Login Page</a>
              </li>
              <li>
                <a href="#">Tabelas</a>
              </li>
            </ul>
            <!-- /menu lateral -->
          </li>
        </ul>
      </div>
      <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
  </nav>
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">


            @yield('conteudo')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="/vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="/vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="/dist/js/sb-admin-2.js"></script>

        @yield('script')

    </body>
</html>
