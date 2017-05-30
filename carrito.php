<?php include ('conexiontienda.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
.c {
	font-weight: bold;
	font-size: 18px;
}
</style>
</head>

<body>
<p class="c">Carrito de compras</p>
<p>Sus compras hasta el momento son:</p>
<p>&nbsp;</p>


<?php
	if(isset($_POST['id_txt'])){
		$id=$_POST['id_txt'];
		$nombre=$_POST['nombre'];
		$precio=$_POST['precio'];
		$cantidad=$_POST['cantidad'];
	}

?>

<table width="428" border="1">
  <tr>
    <td colspan="4" align="center" bgcolor="#999999">LISTADO DE SUS COMPRAS</td>
  </tr>
  <tr>
    <td width="125" align="center" bgcolor="#FF6600">Producto</td>
    <td width="68" align="center" bgcolor="#FF6600">Precio</td>
    <td width="62" align="center" bgcolor="#FF6600">Cantidad</td>
    <td width="145" align="center" bgcolor="#FF6600">Subtotal</td>
  </tr>
  <tr>
    <td><?php echo $nombre ?></td>
    <td><?php echo $precio ?></td>
    <td><?php echo $cantidad ?></td>
    <td><?php echo $precio*$cantidad ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>TOTAL</td>
    <td>X</td>
  </tr>
</table>
<p><a href="tienda.php">Volver</a></p>
</body>
</html>
