<html>
  <head>
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
    <form action="procesanoticia.php" method="post">
      Título noticia:<br>
      <input type="text" name="titulo"><br>
      Autor:<br>
      <input type="text" name="autor"><br>
      Categoría:<br>
      <input type="text" name="categoria"><br>
      Escriba el articulo<br>
      <textarea name="articulo" cols="50" rows="10"></textarea><br>
      <input type="submit" value="Publicar"><br>
    </form>
  </body>
</html>
