<html>
  <head>
    <title>
      Grupo CCred - Servicios
    </title>

    <?php
      //conectamos a la base
      $connect = mysqli_connect("localhost","root","") or die('No se pudo conectar: '.mysql_error());
      echo "Conectado a la base de datos";
      //Seleccionamos la base
      mysqli_select_db($connect,"ccred_database") or die ('No se pudo seleccionar la base de datos: '.mysql_error()); //hacemos las consultas
      $result=mysqli_query($connect,"select * from noticias order by fecha Desc");
      $totalregistros=mysqli_num_rows($result);
      ?>
    <!--Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Estilos Modificados-->
    <link href="css/style.css" rel="stylesheet">

    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>

    <script src="js/bootstrap.min.js"></script>

  </head>

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
                            <li><a href="#">Voz, datos y vídeo</a></li>
                            <li><a href="#">Optimización de la energía</a></li>
                            <li><a href="#">Cableado estructurado</a></li>
                            <li><a href="#">Seguridad</a></li>
                            <li></li>
                          </ul>
                        </li>

                        <li>
                            <a href="clientes.html">Clientes</a>
                        </li>
                        <li class="active">
                            <a href="galeria.html">Galería</a>
                        </li>
                        <li>
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


    <!--Recogemos las consultas en un array y las mostramos-->
    <?php
      while($row=mysqli_fetch_array($result))
      {
      echo '<h2>'.$row['titulo'].'</h2><br><p>'.$row['noticia'].'</p><br/>'.$row['autor'].'|'.$row['fecha'].'| '.$row['categoria'].' |
      <a href="ver.php?id='.$row['id_noticia'].'">comentarios()</a> |
      <a href="editar.php?id='.$row['id_noticia'].'">editar</a><br/><br /><br /><br />';
      }
      mysqli_free_result($result)
    ?>

  </body>
</html>
