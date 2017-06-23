<?php include('conexiontienda.php');
?>

<html>
  <head>
      <link rel="icon" href="icon/ccredoroico.ico" type="icon/ccredoroico.ico" />
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>
      Tienda CCred
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

  <nav class="navbar navbar-inverse navbar-static-top">
    <div id="navbar" class="collapse navbar-collapse">
      <div class="row">
        <div class="1">
        </div>
        <div class="col-sm-2">
          <ul class="nav navbar-nav">
              <a href="indexreg.html">
                <img src="img/LogosCCRED/logodorado.png"  style="margin-top;" width="75px" height="50px">
              </a>
          </ul>
        </div>
          <div class="col-sm-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="indexreg.html"><font color="#94840D">Inicio</font></a>
              </li>
            </ul>
          </div>
          <div class="col-sm-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="nosotrosreg.html"><font color="#94840D">Nosotros</font></a>
              </li>
            </ul>
          </div>
          <div class="col-sm-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
               <a href="servicios.html" data-toggle="dropdown" class="dropdown-toggle"><font color="#94840D">Servicios
               </font></a>
                <ul class="dropdown-menu">
                  <li><a href="monitoreo-de-redes.html"><font color="#94840D">Monitoreo de redes</font></a></li>
                  <li><a href="voz-datos-y-video.html"><font color="#94840D">Voz, datos y video</font></a></li>
                  <li><a href="optimizacion-de-energia.html"><font color="#94840D">Optimización de la energia</font></a></li>
                  <li><a href="cableado-estructurado.html"><font color="#94840D">Cableado estructurado</font></a></li>
                  <li><a href="capacitacion.html"><font color="#94840D">Capacitación</font></a></li>
                  <li><a href="seguridad.html"><font color="#94840D">Seguridad</font></a></li>
                  <li></li>
                </ul>
              </li>
           </ul>
          </div>

        <div class="col-sm-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="clientesreg.html"><font color="#94840D">Clientes</font></a>
              </li>
            </ul>
          </div>
          <div class="col-sm-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="galeria.html"><font color="#94840D">Galería</font></a>
              </li>
            </ul>
          </div>
          <div class="col-sm-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="productos.html"><font color="#94840D">Productos</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="contacto.php"><font color="#94840D">Contacto</font></a>
              </li>
            </ul>
          </div>

          <div class="col-sm-2">
            <ul class="nav navbar-nav">
              <li class="active">
                <a href="tienda.php"><i class="glyphicon glyphicon-shopping-cart" style="color:#94840D" title="Tienda"></i></a>
              </li>
            </ul>
            <ul class="nav navbar-nav">
              <li>
                <a href="logout.php"><i class="glyphicon glyphicon-log-out" style="color:#94840D" title="Salir"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

<p align="right"><a href="carrito.php">Ver carrito</a></p>
<br>
<?php $a=verListadoProductos ('comprar') ?>

<br>
<br>
<br>

<form name="form1" method="post" action="pidodatos.php">
  <center><input type="submit" align="right" name="login" id="login" value="Acceso Pesonal CCred"></center>
</form>
<p></p>

    <footer class="footer-distributed">

      <div class="footer-left" align="center">
          <a href="index.html">
            <img src="img/LogosCCRED/logodorado.png" align="left" style="margin-bottom;" width="100px" height="80px">
          </a>
      </div>

        <div class="footer-center" align="center">
          <p class="footer-links" style="margin-bottom;">
            <a href="indexreg.html" align="center"><font color="#94840D">Inicio</a>
            ·</font>
            <a href="nosotrosreg.html" align="center"><font color="#94840D">Nosotros</a>
            ·</font>
            <a href="servicios.html" align="center"><font color="#94840D">Servicios</a>
            ·</font>
            <a href="clientesreg.html" align="center"><font color="#94840D">Clientes</a>
            ·</font>
            <a href="galeriareg.html" align="center"><font color="#94840D">Galería</a>
            ·</font>
            <a href="galeriareg.html" align="center"><font color="#94840D">Productos</a>
            ·</font>
            <a href="contactoreg.php" align="center"><font color="#94840D">Contacto</a>
          </p>
          <p align="center"><font color="#94840D"><h6>Grupo CCred S.A de C.V &copy; Todos los derechos reservados. 2017</h6></font></p>
        </div>

        <div class="footer-right" align="center" style="margin-bottom">
          <a href="https://www.facebook.com/GrupoCCred/"><i class="fa fa-facebook" style="color: #94840D;"></i></a>
          <a href="https://twitter.com/GrupoCCred"><i class="fa fa-twitter" style="color: #94840D;"></i></a>
          <a href="https://www.instagram.com/grupoccred/"><i class="fa fa-instagram" style="color: #94840D;"></i></a>
          <a href="#"><i class="fa fa-youtube-play" style="color: #94840D;"></i></a>
        </div>

      </footer>

    </body>
    </html>
