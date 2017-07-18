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


    <div class="table-responsive" align="center" width=100% style="overflow-x:auto;" "overflow-y:auto;">
      <table class="table-responsive"  style="width:80%" border="1" align="center">

    <tr>
      <th colspan="8" align="center" valign="middle" bgcolor="#999999">LISTADO DE PRODUCTOS </th>
    </tr>
    <tr>
      <th align="center" valign="middle" bgcolor="#FFA61F">ID</th>
      <th align="center" valign="middle" bgcolor="#FFA61F">Imagen</th>
      <th align="center" valign="middle" bgcolor="#FFA61F">Nombre</th>
      <th align="center" valign="middle" bgcolor="#FFA61F">Descripción</th>
      <th align="center" valign="middle" bgcolor="#FFA61F">Precio</th>
      <th align="center" valign="middle" bgcolor="#FFA61F">En Stock</th>
      <th align="center" valign="middle" bgcolor="#FFA61F">Fecha</th>
      <th align="center" valign="middle" bgcolor="#FFA61F">Agregar</th>
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
          <td align="center" valign="middle"><img src="<?php echo $imagen; ?>" width="175" height="110" /><br /></td>
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

              <td style="display: inline-block;" align="center" valign="middle"><?php echo $id ?></td>
              <td style="display: inline-block;" align="center" valign="middle"><img src="<?php echo ''. $imagen; ?>" width="195" height="130" /><br />
              </td>
              <td style="display: inline-block;" align="center" valign="middle"><?php echo $nombre ?></td>
              <td style="display: inline-block;" align="center" valign="middle"><?php echo $desc ?></td>
              <td style="display: inline-block;" align="center" valign="middle"><?php echo $precio ?></td>
              <td style="display: inline-block;" align="center" valign="middle"><?php echo $enStock ?></td>
              <td style="display: inline-block;" align="center" valign="middle"><?php echo $fecha ?></td>
              <td style="display: inline-block;" align="center" valign="middle">
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
                <form action="borrar.php" method="post">
                	<input name="id" type="hidden" value="<?php echo $id ?>" />
                	<input name="" value="Borrar" type="submit" />
                </form>


            <?php } ?>
          </td>
        </tr>
        </p>

         <?php } ?>
      </table>
    </div>

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

function borrar($id)
{
	$sql="DELETE from productos where id=$id";
	mysql_query($sql);
	echo 'Registro eliminado con exito';
}

?>
