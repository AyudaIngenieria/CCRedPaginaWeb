<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form action="recibirproductos.php" method="post" enctype="multipart/form-data" id="form1">
  <table width="422" border="1">
    <tr>
      <td colspan="2" align="center" valign="middle"><h3>Ingresar productos a Stock</h3></td>
    </tr>
    <tr>
      <td width="206">&nbsp;</td>
      <td width="123">&nbsp;</td>
    </tr>
    <tr>
      <td align="right">Imagen:</td>
      <td><label for="imagen"></label>
      <input type="file" name="imagen" id="imagen" /></td>
    </tr>
    <tr>
      <td align="right">Nombre:</td>
      <td><label for="nombre"></label>
      <input type="text" name="nombre" id="nombre" /></td>
    </tr>
    <tr>
      <td align="right">Descripción:</td>
      <td><label for="descripcion"></label>
      <input type="text" name="descripcion" id="descripcion" /></td>
    </tr>
    <tr>
      <td align="right">Precio:</td>
      <td><label for="precio"></label>
      <input type="text" name="precio" id="precio" /></td>
    </tr>
    <tr>
      <td align="right">En Stock:</td>
      <td><label for="enStock"></label>
      <input type="text" name="enStock" id="enStock" /></td>
    </tr>
    <tr>
      <td align="right">Fecha: </td>
      <td><label for="fecha"></label>
      <input type="text" name="fecha" id="fecha" value="<?php echo date("Y-m-d"); ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="button" id="button" value="Enviar" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
