<?php

include ('conexiontienda.php');

$usuarioIng=$_POST['user'];
$passIng=$_POST['pass'];

session_start();
$consulta=mysql_query("select * from usuarios");
$puerta='continuar';

while($filas=mysql_fetch_array($consulta) and $puerta='continuar'){

	$id=$filas['id'];
	$nombre=$filas['nombre'];
	$usuario=$filas['usuario'];
	$pass=$filas['pass'];
	$permiso=$filas['permisos'];
	$fecha=$filas['fecha'];

	if(isset($usuarioIng)and isset($passIng)){
		if ($usuario==$usuarioIng and $pass==$passIng){
			echo 'Bienvenido: ' .$nombre;
			$miSession=array('id'=>$id,'nombre'=>$nombre,
							'usuario'=>$usuario, 'pass'=>$pass,
							'fecha'=>$fecha, 'permiso'=>$permiso);
			//ir a la pagina restringida
			$_SESSION['miSession']=$miSession;
			?>
			<html>
            	<head>
            		<meta http-equiv="refresh" content="3; url=buscar.php">
                </head>
            </html>
            <?php
			$puerta='salir';
			exit;
		} else {
			$resultado='no';
		}
	}

}

			if($resultado=='no'){
				echo 'Su usuario o contraseña NO se encontraron.';
				?>

            <html>
            	<head>
            		<meta http-equiv="refresh" content="3; url=tiendaccred.php">
                </head>
            </html>

                <?php

			}
			?>
