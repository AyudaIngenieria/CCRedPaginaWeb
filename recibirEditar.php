<?php include('conexiontienda.php'); ?>

<?php

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$desc=$_POST['desc'];
$enStock=$_POST['cantidad'];
$fecha=$_POST['fecha'];

$rutaEnServidor='imagenes'; //CORREGIR ERROR EN RUTA EN SERVIDOR
$rutaTemporal=$_FILES['imagen2']['tmp_name'];
$nombreImagen=$_FILES['imagen2']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;

if($_FILES['imagen2']['name']<>""){
	//echo 'intento cambiar la imagen';
	move_uploaded_file($rutaTemporal,"".$rutaDestino);
	$a=grabarCambios($id,$nombre,$desc,$precio,$enStock,$rutaDestino,$fecha);
} else {
	//echo 'no intento cambiar la imagen' ;
	$recuperoArray=EncontrarReg($id);
	$rutaDestino=$recuperoArray['imagen'];
	$a=grabarCambios($id,$nombre,$desc,$precio,$enStock,$rutaDestino,$fecha);
}
?>

<html>
	<head>
    	<meta http-equiv="refresh" content="1; url=buscar.php">
    </head>
</html>
