<html>
  <head>
      <link rel="icon" href="icon/ccredico.ico" type="icon/ccredico.ico" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>
      Regístro
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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="footer, links, icons" />

    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  </head>

  <body>

<body>

  <nav class="navbar navbar-inverse navbar-static-top">
    <div id="navbar" class="collapse navbar-collapse">
      <div class="row">
        <div class="1">
        </div>
        <div class="col-sm-2">
          <ul class="nav navbar-nav">
              <a href="index.html">
                <img src="img/LogosCCRED/logoblanco.png"  style="margin-top;" width="55px" height="50px">
              </a>
          </ul>
        </div>
          <div class="col-sm-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="index.html">Inicio</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="nosotros.html">Nosotros</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
               <a href="servicios.html" data-toggle="dropdown" class="dropdown-toggle">Servicios</a>
                <ul class="dropdown-menu">
                  <li><a href="monitoreo-de-redes.html">Monitoreo de redes</a></li>
                  <li><a href="voz-datos-y-video.html">Voz, datos y video</a></li>
                  <li><a href="optimizacion-de-energia.html">Optimización de la energia</a></li>
                  <li><a href="cableado-estructurado.html">Cableado estructurado</a></li>
                  <li><a href="capacitacion.html">Capacitación</a></li>
                  <li><a href="seguridad.html">Seguridad</a></li>
                  <li></li>
                </ul>
              </li>
           </ul>
          </div>

        <div class="col-sm-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="clientes.html">Clientes</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="galeria.html">Galería</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="productos.html">Productos</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="contacto.php">Contacto</a>
              </li>
            </ul>
          </div>

          <div class="col-sm-2">
            <ul class="nav navbar-nav">
              <li class="active">
                <a href="registro.php"><i class="glyphicon glyphicon-user" title="Regístrate"></i></a>
              </li>
            </ul>
            <ul class="nav navbar-nav">
              <li>
                <a href="login.php"><i class="glyphicon glyphicon-log-in" title="Ingresar"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <fieldset>
        <legend><h1>Registro</h1></legend>
          <h3>Ingresa tus datos y podrás acceder al contenido exclusivo de Grupo CCred.</h3>
        </fieldset>
    </div>
    <br>
    <br>
    <div class="container">
      <form class="form-horizontal" action="envioregistro.php" method="post">
        <div class="form-group">
          <label class="control-label col-sm-4" for="nombre">Nombre(s):</label>
          <div class="col-sm-6">
            <input type="nombre" required="required" class="form-control" id="nombre" placeholder="Nombre/s" name="nombre">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="apellido">Apellido(s):</label>
          <div class="col-sm-6">
            <input type="apellido" required="required" class="form-control" id="apellido" placeholder="Apellido/s" name="apellido">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="correo">Correo electrónico:</label>
          <div class="col-sm-6">
            <input type="correo" required="required" class="form-control" id="correo" placeholder="Correo electrónico" name="correo">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="telefono">Número de teléfono:</label>
          <div class="col-sm-6">
            <input type="telefono" required="required" class="form-control" id="telefono" placeholder="Número de teléfono" name="telefono">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="usuario">Nombre de usuario:</label>
          <div class="col-sm-6">
            <input type="usuario" required="required" class="form-control" id="usuario" placeholder="Nombre de usuario" name="usuario">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="password">Contraseña:</label>
          <div class="col-sm-6">
            <input type="password" required="required" class="form-control" id="password" placeholder="Contraseña" name="password">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="confirmpass">Confirma tu contraseña:</label>
          <div class="col-sm-6">
            <input type="password" required="required" class="form-control" id="confirmpass" placeholder="Confirma tu contraseña"
            name="confirmpass">
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-6">
            <div class="checkbox">
              <label><input type="checkbox" name="remember">Acepto que los datos mencionados en este formulario, son
              exclusivamente de la persona que los registro. </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-7">
            <button type="submit" class="btn btn-default" name="enviar" value="Enviar">Enviar</button>
            <button type="reset" class="btn btn-default" name="borrar" value="Borrar">Borrar</button>
          </div>
        </div>
      </form>
    </div>


  <footer class="footer-distributed">

    <div class="footer-left" align="center">
      <a href="index.html">
        <img src="img/LogosCCRED/logoccred.png" align="left" style="margin-bottom;" width="80px" height="80px">
      </a>
    </div>

    <div class="footer-center" align="center">
      <p class="footer-links" style="margin-bottom;">
        <a href="index.html" align="center">Inicio</a>
        ·
        <a href="nosotros.html" align="center">Nosotros</a>
        ·
        <a href="servicios.html" align="center">Servicios</a>
        ·
        <a href="clientes.html" align="center">Clientes</a>
        ·
        <a href="productos.html" align="center">Productos</a>
        ·
        <a href="contacto.php" align="center">Contacto</a>
        </p>
      <p align="center"><font color="#CEC8c4"><h6>Grupo CCred S.A de C.V &copy; Todos los derechos reservados. 2017</h6></font></p>
    </div>

    <div class="footer-right" align="center" style="margin-bottom">
      <a href="https://www.facebook.com/GrupoCCred/"><i class="fa fa-facebook" style="color: #3B5998;"></i></a>
      <a href="https://twitter.com/GrupoCCred"><i class="fa fa-twitter" style="color: #55ACEE;"></i></a>
      <a href="https://www.instagram.com/grupoccred/"><i class="fa fa-instagram" style="color: #FBAD50;"></i></a>
      <a href="#"><i class="fa fa-youtube-play" style="color: #BB0000;"></i></a>
    </div>

  </footer>

</body>
</html>
