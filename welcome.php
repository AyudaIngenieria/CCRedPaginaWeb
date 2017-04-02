<?php
   include('session.php');
?>
<html>

   <head>
      <title>Bienvenido/a </title>
   </head>

   <body>
      <h1>Bienvenido/a <?php echo $login_session; ?></h1>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>

</html>
