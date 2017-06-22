<?php

include("conexion.php");

mysql_select_db($baseDatos,$conexion)or die("No se pudo seleccionar la base de datos ".mysql_error());

$sql="
INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `cuanto_hay`, `imagen`, `fecha`) VALUES
(1, 'Cable UTP (por metro)', 'Transmite 1 Gb/s | Ancho de banda: 250 MHz | 4 pares trenzados | AWG: 8/24', '20', '5', 'img/tienda/productos/cableutp.jpg', '2017-05-29'),
(2, 'Cable de red ultra plano UTP CAT 5 de 10m', 'Transmite voz y datos hasta a 100 Mbps | 8 hilos calibre 24 AWG cada uno', '270', '2', 'img/tienda/productos/cableinternet.jpg', '2017-05-29');
";

mysql_query($sql,$conexion)or die("No se pudo insertar registros ".mysql_error()); 


$sql="
INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `pass`, `permisos`, `imagen`, `fecha`) VALUES
(1, 'Samuel Bautista', 'samuelbr96', 'samuelbr96', 1, NULL, '2017-06-11'),
(2, 'Kevin Gonzalez', 'roshacz', 'roshacz', 0, NULL, '2017-06-11');
";

mysql_query($sql,$conexion)or die("No se pudo insertar registros ".mysql_error()); 

?>