<?php include('conexiontienda.php');
?>

<?php

$rutaEnServidor='img/tienda/productos';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];

$desc=$_POST['descripcion'];
$enStock=$_POST['enStock'];
$fecha=$_POST['fecha'];

//$sql="INSERT INTO datos (ruta,descripcion) values ('".$rutaDestino."','".$desc."')";
$sql="INSERT INTO productos (imagen,nombre,descripcion,precio,cuanto_hay,fecha)
		values ('".$rutaDestino."','".$nombre."','".$desc."','".$precio."','".$enStock."','".$fecha."')";

$res=mysql_query($sql,$conexion);

if($res){
	echo 'Inserción con éxito';
}else{
	echo 'No se pudo insertar';
}

?>
