<!DOCTYPE html>
<html lang="pt">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Notify-Mi Login</title>

  <!-- Bootstrap Core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Social Buttons CSS -->
  <link href="../vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
  <script language="javascript" type="text/javascript">
  var TimerID;
  var m = 00;
  var s = 5;
  var sc;

  function countdown()
  {
    s--;
    sc = s;
    if (s < 5) {
      sc = '0'+s;
    }

    document.getElementById('counter').value = '00:00:'+sc;

    if (s > 0) {
      TimerID = setTimeout("countdown()", 300) //Every one second;
    }
    else {
      location.href="/notifymi/login/";

    }
  }
  </script>

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
                <div>
                  <h2 align="center">Dados inválidos<h2>


                      <body onload="javascript:setTimeout('countdown()', 300);">
                        <input type="text" id="counter" value="00:00:03" disabled="disabled" hidden="true">


                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- jQuery -->
      <script src="../vendor/jquery/jquery.min.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

      <!-- Metis Menu Plugin JavaScript -->
      <script src="../vendor/metisMenu/metisMenu.min.js"></script>

      <!-- Custom Theme JavaScript -->
      <script src="../dist/js/sb-admin-2.js"></script>

    </body>

    </html>
