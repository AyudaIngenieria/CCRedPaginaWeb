<?php
//recibimos las variables enviadas por el formulario
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$categoria=$_POST['categoria'];
$articulo=$_POST['articulo'];
//conectamos a la base 
$connect = mysqli_connect("localhost","root","") or die("No se pudo conectar:".mysql_error());

//Seleccionamos la base
mysqli_select_db($connect,"ccred_database");

//insertamos los registros almacenados en las variables

$sql = "INSERT INTO noticias (titulo, autor, categoria, noticia,fecha)
VALUES ('$titulo', '$autor', '$categoria', '$articulo', NOW());";

if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error:" . $sql . "<br>";
}
?>
