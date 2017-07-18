<?php include('conexiontienda.php');
?>

<html>

<head>

    <!-- Icon -->
    <link rel="icon" href="icon/ccredico.ico" type="icon/ccredico.ico" />

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="footer, links, icons" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tienda Grupo CCred</title>

    <!-- Bootstrap Core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>

  </head>


  <style>

  .table {
      border-collapse: collapse;
      border-spacing: 0px;
      width: 100%;
      border: 0;


      margin-left: 10px;
      margin-right: 10px;
      margin-top: 10px;
      margin-bottom: 10px;
  }

  th, td {
      border: 3px;
      text-align: center;
      padding: 5px;
  }

  tr:nth-child(even){background-color: #f2f2f2}

  </style>

<body>

  <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Grupo CCred</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-center">
                      <li>
                          <a href="index.html">Inicio</a>
                      </li>
                      <li>
                          <a href="nosotros.html">Nosotros</a>
                      </li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                          Servicios <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="monitoreo-de-redes.html">Monitoreo de redes</a></li>
                          <li><a href="voz-datos-y-video.html">Voz, datos y vídeo</a></li>
                          <li><a href="optimizacion-de-energia.html">Optimización de la energía</a></li>
                          <li><a href="cableado-estructurado.html">Cableado estructurado</a></li>
                          <li><a href="seguridad.html">Seguridad</a></li>
                          <li></li>
                        </ul>
                      </li>

                      <li>
                          <a href="clientes.html">Clientes</a>
                      </li>
                      <li>
                          <a href="galeria.html">Galería</a>
                      </li>
                      <li class="active">
                          <a href="productos.html">Productos</a>
                      </li>
                      <li>
                          <a href="contacto.php">Contacto</a>
                      </li>
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    <li>
                      <a href="registro.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Registro</a>
                    </li>
                    <li>
                      <a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Entrar</a>
                    </li>
                  </ul>
                </div>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.final de navbar-nav -->
      </nav>

<br>
<br>
<br>

<div>

<p align="right"><a href="carrito.php">Ver carrito</a></p>
<br>

<?php $a=verListadoProductos ('comprar') ?>

</div>

<br>
<br>


<form name="form1" method="post" action="pidodatos.php">
  <center><input type="submit" align="right" name="login" id="login" value="Acceso Pesonal CCred"></center>
</form>
<p></p>

<br>
<br>
<br>

<!-- inicia footer -->

              <footer class="distributed" id="myFooter">
                  <div class="second-bar">
                     <div class="container">
                            <a href="index.html"><img src="img/LogosCCRED/logoccred.png" align="left"
                              style="margin-bottom;" width="100px" height="90px"> </a>
                          <div class="social-icons">
                              <a href="https://www.facebook.com/GrupoCCred/" class="facebook"><i class="fa fa-facebook"></i></a>
                              <a href="https://twitter.com/GrupoCCred" class="twitter"><i class="fa fa-twitter"></i></a>
                              <a href="https://www.instagram.com/grupoccred/" class="instagram"><i class="fa fa-instagram">
                              </i></a>
                          </div>
                          <div class="footer-copyright">
                            <p><font color="#CFCDCD">Grupo CCred S.A de C.V © 2017. Todos los derechos reservados.
                            </font></p>
                          </div>
                      </div>
                  </div>
              </footer>


    </body>
    </html>
