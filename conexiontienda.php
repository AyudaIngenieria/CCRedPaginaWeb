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

      echo '<p>Registro Actualizado. </p>';
    }
}

?>
