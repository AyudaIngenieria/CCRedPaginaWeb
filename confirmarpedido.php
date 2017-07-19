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

    <title>Confirma tu pedido</title>

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

<style type="text/css">
.c {	font-weight: bold;
	font-size: 18px;
}
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

<form id="form1" name="form1" method="post" action="finalizarpedido.php">
<h2>Confirmar pedido
</h2>
<p>Verifique que los datos de su compra sean correctos, y a continuación, ingrese sus datos.</p>

<br>
<br>

<table width="657" border="1" align="center">
  <tr>
    <td colspan="4" align="center" bgcolor="#999999"><strong>LISTADO DE SUS COMPRAS</strong></td>
  </tr>
  <tr>
    <td width="280" align="center" bgcolor="#FFA61F">Producto</td>
    <td width="131" align="center" bgcolor="#FFA61F">Precio</td>
    <td width="69" align="center" bgcolor="#FFA61F">Cantidad</td>
    <td width="149" align="center" bgcolor="#FFA61F">Subtotal</td>
  </tr>

  <?php
  	session_start();
	$mi_carrito=$_SESSION['carrito'];

 		if(isset($mi_carrito)){
			$total=0;
			for($i=0;$i<count($mi_carrito);$i++){
				if ($mi_carrito[$i]<>NULL)
				{

  ?>

  <tr>
    <td width="280" align="center" valign="middle"><?php echo $mi_carrito[$i]['nombre'] ?></td>
    <td align="center" valign="middle"><?php echo $mi_carrito[$i]['precio'] ?></td>
    <td align="center" valign="middle"><?php echo $mi_carrito[$i]['cantidad'] ?></td>

    <?php
		$subtotal=$mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'];
		$total=$total+$subtotal;
	?>

    <td align="center" valign="middle"><?php echo $subtotal ?>
    </td>
  </tr>

  <?php
				}
  		}
	}
  ?>

  <tr>
    <td width="280">&nbsp;</td>
    <td>&nbsp;</td>
    <td>TOTAL</td>
    <td align="center" valign="middle">  <?php if (isset($total)) echo $total ?></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;    </td>
    </tr>
  <tr>
    <td colspan="4" align="center" valign="middle" bgcolor="#FFA61F">Datos del comprador</td>
    </tr>
  <tr>
    <td width="280" align="right" valign="middle">Nombre(s):</td>
    <td colspan="3"><label for="nombre"></label>
      <input name="nombre" type="text" required="required" id="nombre" size="60" /></td>
  </tr>
  <tr>
    <td width="280" align="right" valign="middle">Apellido(s):</td>
    <td colspan="3"><input name="apellido" type="text" required="required" id="apellido" size="60" /></td>
    </tr>
  <tr>
    <td width="280" align="right" valign="middle">Dirección:</td>
    <td colspan="3"><input name="direccion" type="text" required="required" id="direccion" size="60" /></td>
    </tr>
  <tr>
    <td width="280" align="right" valign="middle">Correo electronico:</td>
    <td colspan="3"><input name="correo" type="text" required="required" id="correo" size="60" /></td>
    </tr>
  <tr>
    <td width="280" align="right" valign="middle">Teléfono:</td>
    <td colspan="3"><input name="telefono" type="text" required="required" id="telefono" size="60" /></td>
    </tr>
  <tr>
    <td width="280">&nbsp;</td>
    <td colspan="3" align="left"><input type="submit" name="confirmarPedido" id="confirmarPedido" value="Comprar" /></td>
    </tr>

</table>
</form>

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
