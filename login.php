<?php
   include("config.php");
   session_start();
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT idusuario FROM usuarios WHERE usuario = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         $_SESSION['login_user'] = $myusername;

         header("location: welcome.php");
      }else {
         $error = "Tu nombre de usuario o contraseña no son válidos. Por favor, vuelva a intentarlo.";
      }
   }
?>

<html>
  <head>
      <link rel="icon" href="icon/ccredico.ico" type="icon/ccredico.ico" />
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Login
    </title>

    <!--Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Estilos Modificados-->
    <link href="css/style.css" rel="stylesheet">

    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>

    <script src="js/bootstrap.min.js"></script>

    <style>
      .panel-color{
        background-color: #080808;
      }
    </style>

  </head>
  <body style="background-color: #080808">

    <div class="container">
      <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-color" >
          <div class="panel-heading">
              <div class="panel-title" style="color: #F67115"><center><h2>Bienvenid@ a</h2></center></div>
              <center><img src="img/LogosCCRED/grupoccred.png" alt="Grupo CCred" class="" width='200' height='160'></center>
              <br>
              <h4><center><font face="arial" color="#BCBDCB">Ingresa tus datos para acceder al contenido exclusivo de
              Grupo CCred.</font></center></h4>
          </div>
            <div style="padding-top:30px" class="panel-body" >
              <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form id="loginform" class="form-horizontal" role="form" action = "" method = "post">

                      <div style="margin-bottom: 25px" class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                  <input id="login-username" type="text" class="form-control" name="username" value=""
                                  placeholder="Nombre de usuario">
                              </div>

                      <div style="margin-bottom: 25px" class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                  <input id="login-password" type="password" class="form-control" name="password"
                                  placeholder="Contraseña">
                              </div>
                          <div style="margin-top:10px" class="form-group">
                              <!-- Button -->
                              <div class="col-sm-12 control">
                              <center><button type="submit" class="btn btn-warning">Ingresar</button>
                              <button input type="button" value="Boton" class="btn btn-warning" onclick="location.href='index.html'">
                              Regresar a página principal</button></center>
                              </div>
                          </div>
                      </form>
                      <div style = "color:#cc0000; margin-top:10px"><center><h3><?php echo $error; ?></h3></center></div>
                   </div>
              </div>
   </div>
</div>
  </body>
</html>
