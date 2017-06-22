<?php

//****************************************************************************************************************************************
//ATENCION: Ejecutar este archivo solo una vez para instalar la tienda online
//****************************************************************************************************************************************

include("conexion.php");

//creamos la base de datos 
mysql_query ("CREATE DATABASE ".$baseDatos,$conexion)or die("No se puede crear la base de datos ".mysql_error());
//**************************************************

//crear las tablas
mysql_select_db($baseDatos,$conexion)or die("Error al seleccionar la base de datos".mysql_error());

$sql="
		CREATE TABLE productos(
			id INT NOT NULL AUTO_INCREMENT,
			imagen varchar(100) null,
			nombre varchar(50) null,
			descripcion varchar(100) null,
			precio varchar(10) null,
			cuanto_hay varchar(10) null,
			fecha date null,
			primary key(id)
		)	
";
mysql_query($sql,$conexion);


$sql="
		CREATE TABLE usuarios(
			id INT NOT NULL AUTO_INCREMENT,
			nombre varchar(50) null,
			usuario varchar(30),
			pass varchar(30),
			permisos int(1),
			imagen varchar(100) null,
			fecha date null,
			primary key(id)
		)
";
mysql_query($sql,$conexion);

//**************************************************

?>