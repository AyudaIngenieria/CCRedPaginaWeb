<?php
//recibimos las variables enviadas por el formulario
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$categoria=$_POST['categoria'];
$articulo=$_POST['articulo'];
//conectamos a la base
$connect = mysql_connect("localhost","root","") or die("No se pudo conectar:".mysql_error());

//Seleccionamos la base
mysql_select_db("ccred_database",$connect);

//insertamos los registros almacenados en las variables

$sql = "INSERT INTO noticias (titulo, autor, categoria, noticia,fecha)
VALUES ('$titulo', '$autor', '$categoria', '$articulo', NOW());";

if (mysql_query($sql)) {
    echo "New record created successfully";
} else {
    echo "Error:" . $sql . "<br>";
}
?>
