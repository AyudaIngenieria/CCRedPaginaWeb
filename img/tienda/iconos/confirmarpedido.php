<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
.c {	font-weight: bold;
	font-size: 18px;
}
</style>
</head>

<body>
<h2>Confirmar Pedido
</h2>

<table width="525" border="1">
  <tr>
    <td colspan="4" align="center" bgcolor="#999999">LISTADO DE SUS COMPRAS</td>
  </tr>
  <tr>
    <td width="125" align="center" bgcolor="#FF6600">Producto</td>
    <td width="68" align="center" bgcolor="#FF6600">Precio</td>
    <td width="147" align="center" bgcolor="#FF6600">Cantidad</td>
    <td width="157" align="center" bgcolor="#FF6600">Subtotal</td>
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
    <td align="center" valign="middle"><?php echo $mi_carrito[$i]['nombre'] ?></td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>TOTAL</td>
    <td align="center" valign="middle">  <?php if (isset($total)) echo $total ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><form id="form1" name="form1" method="post" action="confirmarpedido.php">
      <input type="submit" name="confirmarPedido" id="confirmarPedido" value="Comprar" />
    </form></td>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>

</table>

</body>
</html>