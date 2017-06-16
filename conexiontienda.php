<?php

$conexion=mysql_connect('localhost','root','') or die('No hay conexion a la base de datos');
$db=mysql_select_db('tiendaccred',$conexion) or die('No existe la base de datos');

function ActualizarStock ($id,$can)
{
    $consulta="select * from productos where id=$id";
    $res=mysql_query($consulta);
    $fila=mysql_fetch_array($res);
    $enStock=$fila['cuanto_hay']; //para obtener la cantidad enstock
    //le paso el id del producto y la cantidad comprada
    //escribo en mi base de datos

    if(isset($id))
    {
      $can=$enStock-$can;
      $cad="UPDATE productos set cuanto_hay='$can' where id=$id";
      mysql_query($cad);
      //echo $cad

      echo '<p>Registro Actualizado! </p>';
    }
}

?>

<?php function verListadoProductos ($modo) {?>

<form id="form1" name="form1" method="post" action="">
      </form>
      <table width="958" border="1" align="center">
        <tr>
          <td colspan="5">&nbsp;</td>
          <td width="65">BUSCAR:</td>
          <td width="163"><form id="form2" name="form2" method="post" action="">
            <label for="buscar"></label>
            <input type="text" name="buscar" id="buscar" />
          </form></td>
          <td width="105"><form id="form3" name="form3" method="post" action="">
            <form method="post" type="submit">
            <input type="submit" name="Aceptar" id="Aceptar" value="Aceptar" />
            </form>
          </form></td>
        </tr>
        <tr>
          <td colspan="8" align="center" bgcolor="#999999">LISTADO DE PRODUCTOS</td>
        </tr>
        <tr>
          <td width="43" align="center" bgcolor="#FF6600"> ID   </td>
          <td width="124" align="center" bgcolor="#FF6600">IMAGEN</td>
          <td width="94" align="center" bgcolor="#FF6600">NOMBRE</td>
          <td width="240" align="center" bgcolor="#FF6600">DESCRIPCIÓN</td>
          <td width="72" align="center" bgcolor="#FF6600">PRECIO</td>
          <td align="center" bgcolor="#FF6600">EN STOCK</td>
          <td align="center" bgcolor="#FF6600">FECHA</td>
          <td align="center" bgcolor="#FF6600">AGREGAR </td>
        </tr>

        <?php
        $consulta=mysql_query("select * from productos");
          if (isset($_POST['buscar'])){
        	  $consulta=mysql_query("select * from productos where nombre like '%" .$_POST['buscar']. "%'");
          }

        	while($filas=mysql_fetch_array($consulta)){
      		$id=$filas['id'];
        	$imagen=$filas['imagen'];
        	$nombre=$filas['nombre'];
        	$desc=$filas['descripcion'];
      		$precio=$filas['precio'];
      		$enStock=$filas['cuanto_hay'];
      		$fecha=$filas['fecha'];

        ?>

        <tr>

          <?php if($modo<>'edicion') { ?>
          <td align="center" valign="middle"><?php echo $id ?></td>
          <td align="center" valign="middle"><img src="<?php echo $imagen; ?>" width="195" height="130" /><br /></td>
          <td align="center" valign="middle"><?php echo $nombre ?></td>
          <td align="center" valign="middle"><?php echo $desc ?></td>
          <td align="center" valign="middle"><?php echo $precio ?></td>
          <td align="center" valign="middle"><?php echo $enStock ?></td>
          <td align="center" valign="middle"><?php echo $fecha ?></td>
          <td align="center" valign="middle">
            <form action="carrito.php" method="post" name="compra">
              <input name="id_txt" type="hidden" value="<?php echo $id ?>" />
              <input name="nombre" type="hidden" value="<?php echo $nombre ?>" />
              <input name="precio" type="hidden" value="<?php echo $precio ?>" />
              <input name="cantidad" type="hidden" value="1" />
              <input name="Comprar" type="submit" value="Comprar" />
            </form>
            <?php } else { ?>

              <td align="center" valign="middle"><?php echo $id ?></td>
              <td align="center" valign="middle"><img src="<?php echo ''. $imagen; ?>" width="195" height="130" /><br /></td>
              <td align="center" valign="middle"><?php echo $nombre ?></td>
              <td align="center" valign="middle"><?php echo $desc ?></td>
              <td align="center" valign="middle"><?php echo $precio ?></td>
              <td align="center" valign="middle"><?php echo $enStock ?></td>
              <td align="center" valign="middle"><?php echo $fecha ?></td>
              <td align="center" valign="middle">
                <form action="editar.php" method="post" name="compra">
                  <input name="id2" type="hidden" value="<?php echo $id ?>" />
                  <input name="imagen2" type="hidden" value="<?php echo $imagen ?>" />
                  <input name="nombre2" type="hidden" value="<?php echo $nombre ?>" />
                  <input name="desc2" type="hidden" value="<?php echo $desc ?>" />
                  <input name="precio2" type="hidden" value="<?php echo $precio ?>" />
                  <input name="cantidad2" type="hidden" value="<?php echo $enStock ?>" />
                  <input name="fecha2" type="hidden" value="<?php echo $fecha ?>" />
                  <input name="Comprar" type="submit" value="Editar" />
                </form>

            <?php } ?>
          </td>
        </tr>
        </p>

         <?php } ?>
      </table>
 <?php } ?>

 <?php
 function EncontrarReg($id)
 {

 	$consulta="select * from productos where id=$id";
 	$res=mysql_query($consulta);
 	$fila=mysql_fetch_array($res);
 	return $fila;

 }
 ?>

 <?php
function grabarCambios($id,$nom,$des,$precio,$cuanto_hay,$imagen,$fecha)
{

//Escribo en base de datos
if(isset($id))
{
	$cad="UPDATE productos set nombre='$nom', descripcion='$des', precio='$precio',
			cuanto hay='$cuanto_hay', imagen='$imagen', fecha='$fecha' where id=$id";
	mysql_query($cad);
	//echo $cad;
	echo '<p>Registro Actualizado!</p>';
	}
}
?>
