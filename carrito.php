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

    <title>Carrito de compras</title>

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
                      <li>
                          <a href="productos.html">Productos</a>
                      </li>
                      <li>
                          <a href="contacto.php">Contacto</a>
                      </li>
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                      <a href="tiendaccred.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Tienda</a>
                    </li>
                    <li>
                      <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Salir</a>
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


<h2>Carrito de compras
</h2>
<p>Sus compras hasta el momento son:</p>
<p>&nbsp;</p>


<?php

	if(isset($_POST['id_txt'])){
		$id=$_POST['id_txt'];
		$nombre=$_POST['nombre'];
		$precio=$_POST['precio'];
		$cantidad=$_POST['cantidad'];
		$mi_carrito[]=array('id'=>$id,'nombre'=>$nombre,'precio'=>$precio,'cantidad'=>$cantidad);
	}

	session_start();

	if(isset($_SESSION['carrito'])){
	$mi_carrito=$_SESSION['carrito'];
	if (isset($_POST['id_txt'])){
		$id=$_POST['id_txt'];
		$nombre=$_POST['nombre'];
		$precio=$_POST['precio'];
		$cantidad=$_POST['cantidad'];
		$pos=-1;
		for($i=0;$i<count($mi_carrito);$i++){
			if($id==$mi_carrito[$i]['id']){
				$pos=$i;

			}
		}
		if($pos<>-1){
			$cuanto=$mi_carrito[$pos]['cantidad']+$cantidad;
			$mi_carrito[$pos]=array('id'=>$id,'nombre'=>$nombre,'precio'=>$precio,'cantidad'=>$cuanto);
		}
		else{
			$mi_carrito[]=array('id'=>$id,'nombre'=>$nombre,'precio'=>$precio,'cantidad'=>$cantidad);
		}
	}
	}


	if (isset($_POST['id2'])){
		$indice=$_POST['id2'];
		$cuanto=$_POST['cantidad2'];
		$mi_carrito[$indice]['cantidad']=$cuanto;

	}

	if (isset($_POST['id3'])){
		$indice=$_POST['id3'];
		$mi_carrito[$indice]=NULL;

	}

	if (isset($mi_carrito)) $_SESSION['carrito']=$mi_carrito;


?>

<table align="center" width="525" border="1">
  <tr>
    <td colspan="5" align="center" bgcolor="#999999">LISTADO DE SUS COMPRAS</td>
  </tr>
  <tr>
    <td width="125" align="center" bgcolor="#FFA61F">Producto</td>
    <td width="68" align="center" bgcolor="#FFA61F">Precio</td>
    <td width="147" align="center" bgcolor="#FFA61F">Cantidad</td>
    <td width="157" colspan="2" align="center" bgcolor="#FFA61F">Subtotal</td>
  </tr>

  <?php
 		if(isset($mi_carrito)){
			$total=0;
			for($i=0;$i<count($mi_carrito);$i++){
				if ($mi_carrito[$i]<>NULL)
				{

  ?>

  <tr>
    <td align="center" valign="middle"><?php echo $mi_carrito[$i]['nombre'] ?></td>
    <td align="center" valign="middle"><?php echo $mi_carrito[$i]['precio'] ?></td>
    <td align="center" valign="middle">
    <form action="" method="post" name="actualizo">
    	<input name="id2" type="hidden" value="<?php echo $i ?>" />
        <input name="cantidad2" type="text" value="<?php echo $mi_carrito[$i]['cantidad'] ?>" size="2" maxlength="6" />
        <input name="input2" type="image" src="img/tienda/iconos/update.png" align="middle" width="20px" height="20px"/>
    </form></td>

    <?php
		$subtotal=$mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'];
		$total=$total+$subtotal;
	?>

    <td align="center" valign="middle"><?php echo $subtotal ?>
      </td>
    <td align="center" valign="middle"><form action="" method="post">
        <input name="id3" type="hidden" value="<?php echo $i ?>" />
        <input name="input" type="image" src="img/tienda/iconos/delete.png" align="top" width="20px" height="20px"/>
    </form></td>
  </tr>

  <?php
				}
  		}
	}
  ?>

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>TOTAL</td>
    <td colspan="2" align="center" valign="middle">  <?php if (isset($total)) echo $total ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><form id="form1" name="form1" method="post" action="confirmarpedido.php">
      <input type="submit" name="confirmarPedido" id="confirmarPedido" value="Confirmar Pedido" />
    </form></td>
    <td colspan="2" align="center" valign="middle">&nbsp;</td>
  </tr>

</table>
<center><p><a href="tiendaccred.php">Volver</a></p></center>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
