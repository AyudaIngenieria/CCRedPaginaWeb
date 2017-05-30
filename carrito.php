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
		echo 'El id del producto es: '.$_POST['id_txt'];
		$nroreg=$_POST['id_txt'];
		$consulta="select * from productos where id=$nroreg";

	$resultado=mysql_query($consulta);
	$filas=mysql_fetch_array($resultado);
	echo '<br>Productos: <br>';
	echo 'ID: '.$filas['id'].'<br>';
	echo 'Nombre: '.$filas['nombre'].'<br>';
	}

?>

</body>
</html>
