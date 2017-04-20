<?php

//conectamos a la base
$con = mysqli_connect("localhost","root","", "formcontacto");
if (mysqli_connect_errno()){
	echo "No se puede conectar a la Base de Datos" . mysqli_connect_error();
	}

//recibimos las variables enviadas por el formulario
$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
$apellido = mysqli_real_escape_string($con, $_POST["apellido"]);
$correo = mysqli_real_escape_string($con, $_POST["correo"]);
$telefono = mysqli_real_escape_string($con, $_POST["telefono"]);
$ciudad = mysqli_real_escape_string($con, $_POST["ciudad"]);
$estado = mysqli_real_escape_string($con, $_POST["estado"]);
$cod_postal = mysqli_real_escape_string($con, $_POST["cod_postal"]);
$asunto = mysqli_real_escape_string($con, $_POST["asunto"]);
$mensaje = mysqli_real_escape_string($con, $_POST["mensaje"]);

//insertamos los valores del formulario
$sql = "INSERT INTO registro (nombre, apellido, correo, telefono, ciudad, estado, cod_postal, asunto, mensaje)
VALUES ('$nombre','$apellido','$correo','$telefono','$ciudad','$estado','$cod_postal','$asunto','$mensaje')";

if(!mysqli_query($con,$sql)){
	die ('Error: ' . mysqli_error($con));
	}
	else {
		echo "Registro guardado exitosamente";
	}



?>
