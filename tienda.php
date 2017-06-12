<?php include('conexiontienda.php');
?>

<html>
  <head>
      <link rel="icon" href="icon/ccredico.ico" type="icon/ccredico.ico" />
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>
      Tienda
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
          <div class="col-sm-1">
          </div>
          <div class="col-sm-2">
            <a href="index.html">
              <img src="img/LogosCCRED/logoblanco.png" align="center" style="margin-top;" width="50px" height="50px">
            </a>
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
                <li>
                  <a href="servicios.html">Servicios</a>
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
                  <a href="contacto.php">Contacto</a>
                </li>
              </ul>
            </div>

            <div class="col-sm-2">
              <ul class="nav navbar-nav">
                <li class="active">
                  <a href="tienda.php"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                </li>
              </ul>
              <ul class="nav navbar-nav">
                <li>
                  <a href="login.php"><i class="glyphicon glyphicon-log-in"></i></a>
                </li>
              </ul>
            </div>
        </div>
      </div>
</nav>

<?php $a=verListadoProductos ('comprar') ?>

<br>
<br>
<br>

<p><a href="carrito.php">Ver carrito</a></p>
<form name="form1" method="post" action="pidodatos.php">
  <input type="submit" name="login" id="login" value="Login">
</form>
<p></p>

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
            <a href="galeria.html" align="center">Galería</a>
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
