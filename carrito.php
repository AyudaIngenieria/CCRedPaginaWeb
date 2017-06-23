<?php include('conexiontienda.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carrito de compras</title>
<style type="text/css">
.c {
	font-weight: bold;
	font-size: 18px;
}
</style>
</head>

<body>
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

<table width="525" border="1">
  <tr>
    <td colspan="5" align="center" bgcolor="#999999">LISTADO DE SUS COMPRAS</td>
  </tr>
  <tr>
    <td width="125" align="center" bgcolor="#FF6600">Producto</td>
    <td width="68" align="center" bgcolor="#FF6600">Precio</td>
    <td width="147" align="center" bgcolor="#FF6600">Cantidad</td>
    <td width="157" colspan="2" align="center" bgcolor="#FF6600">Subtotal</td>
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
<p><a href="tiendaccred.php">Volver</a></p>
</body>
</html>
