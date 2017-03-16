<?php
//recibimos las variables enviadas por el formulario
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];
$estado=$_POST['estado'];
$cod_postal=$_POST['cod_postal'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

//conectamos a la base
$connect = mysqli_connect("localhost","root","") or die("No se pudo conectar:".mysql_error());

//Seleccionamos la base
mysqli_select_db($connect,"ccred_conform");

//insertamos los registros almacenados en las variables

$sql = "INSERT INTO registros (nombre, apellido, correo, telefono, ciudad, estado, cod_postal, asunto, mensaje)
VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$ciudad', '$estado', '$cod_postal', '$asunto', '$mensaje')";

if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error:" . $sql . "<br>";
}
?>
