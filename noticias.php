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
    <nav class="navbar navbar-inverse navbar-static-top">
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="index.html">Inicio</a>
          </li>
          <li>
            <a href="acercade.html">Acerca de..</a>
          </li>
          <li class="active">
            <a href="servicios.html">Servicios</a>
          </li>
          <li>
            <a href="clientes.html">Clientes</a>
          </li>
          <li>
            <a href="galeria.html">Galería</a>
          </li>
          <li>
            <a href="tienda.html">Tienda</a>
          </li>
          <li>
            <a href="contacto.html">Contacto</a>
          </li>
        </ul>
      </div>
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
