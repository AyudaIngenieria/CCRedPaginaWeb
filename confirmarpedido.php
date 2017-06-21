<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirma tu pedido</title>
<style type="text/css">
.c {	font-weight: bold;
	font-size: 18px;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="finalizarpedido.php">
<h2>Confirmar Pedido
</h2>
<p>Verifique que los datos de su compra sean correctos, y a continuación, ingrese sus datos.</p>

<table width="657" border="1" align="center">
  <tr>
    <td colspan="4" align="center" bgcolor="#999999"><strong>LISTADO DE SUS COMPRAS</strong></td>
  </tr>
  <tr>
    <td width="280" align="center" bgcolor="#FF6600">Producto</td>
    <td width="131" align="center" bgcolor="#FF6600">Precio</td>
    <td width="69" align="center" bgcolor="#FF6600">Cantidad</td>
    <td width="149" align="center" bgcolor="#FF6600">Subtotal</td>
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
    <td colspan="4" align="center" valign="middle" bgcolor="#FF6600">Datos del comprador</td>
    </tr>
  <tr>
    <td width="280" align="right" valign="middle">Nombre(s):</td>
    <td colspan="3"><label for="nombre"></label>
      <input name="nombre" type="text" id="nombre" size="60" /></td>
  </tr>
  <tr>
    <td width="280" align="right" valign="middle">Apellido(s):</td>
    <td colspan="3"><input name="apellido" type="text" id="apellido" size="60" /></td>
    </tr>
  <tr>
    <td width="280" align="right" valign="middle">Dirección:</td>
    <td colspan="3"><input name="direccion" type="text" id="direccion" size="60" /></td>
    </tr>
  <tr>
    <td width="280" align="right" valign="middle">Correo electronico:</td>
    <td colspan="3"><input name="correo" type="text" id="correo" size="60" /></td>
    </tr>
  <tr>
    <td width="280" align="right" valign="middle">Teléfono:</td>
    <td colspan="3"><input name="telefono" type="text" id="telefono" size="60" /></td>
    </tr>
  <tr>
    <td width="280">&nbsp;</td>
    <td colspan="3" align="left"><input type="submit" name="confirmarPedido" id="confirmarPedido" value="Comprar" /></td>
    </tr>

</table>
</form>

</body>
</html>
