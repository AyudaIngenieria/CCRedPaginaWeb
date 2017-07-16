<?php
   include('session.php');
?>
<html>

   <head>
      <title>Bienvenido/a </title>
      <link rel="icon" href="icon/ccredoroico.ico" type="icon/ccredoroico.ico" />
      <meta http-equiv="refresh" content="3; url=indexreg.html">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>

   <body background="img/fondo.jpg">
      <br>
      <br>
      <br>
      <h1><center><font face="arial" color="#D8D8D8">Bienvenido/a <?php echo $login_session; ?></font></center></h1>
      <br>
      <h3><center><font face="arial" color="#D8D8D8">En unos segundos, se te redirigirá al sitio web de Grupo CCred.</font></center></h3>
      <center><img src="img/LogosCCRED/grupoccred.png" width="600px" height="500px"></center>
   </body>

</html>
