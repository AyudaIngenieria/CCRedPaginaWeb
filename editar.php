<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<?php
	$id=$_POST['id2'];
	$imagen=$_POST['imagen2'];
	$nombre=$_POST['nombre2'];
	$desc=$_POST['desc2'];
	$cantidad=$_POST['cantidad2'];
	$precio=$_POST['precio2'];
	$fecha=$_POST['fecha2'];
?>

<body>
<form action="recibirEditar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="338" border="1">
    <tr>
      <td>ImagenNueva: </td>
      <td><label for="Imagen2"></label>
      <input type="file" name="imagen2" id="imagen2" /></td>
    </tr>
    <tr>
      <td>Imagen:</td>
      <td><label for="imagen"></label>
      <img src="<?php echo ''. $imagen; ?>" width="195" height="130" /></td>
    </tr>
    <tr>
      <td>Nombre:</td>
      <input name="id" type="hidden" value="<?php echo $id ?>" />
      <td><label for="nombre"></label>
      <input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>"/></td>
    </tr>
    <tr>
      <td>Descripción:</td>
      <td><label for="desc"></label>
      <input type="text" name="desc" id="desc" value="<?php echo $desc ?>"/></td>
    </tr>
    <tr>
      <td>EnStock:</td>
      <td><label for="cantidad"></label>
      <input type="text" name="cantidad" id="cantidad" value="<?php echo $cantidad ?>" /></td>
    </tr>
    <tr>
      <td>Precio:</td>
      <td><label for="precio"></label>
      <input type="text" name="precio" id="precio" value="<?php echo $precio ?>"/></td>
    </tr>
    <tr>
      <td>Fecha:</td>
      <td><label for="fecha"></label>
      <input type="text" name="fecha" id="fecha" value="<?php echo $fecha ?>"/></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Modificar" /></td>
    </tr>
  </table>
</form>
</body>
</html>
