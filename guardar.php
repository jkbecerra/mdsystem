<?php
 error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
	
	$nombres=$_POST["nom"];  
	$contraseña=$_POST["con"];
	$apellidos=$_POST["ap"];
	$direccion=$_POST["dir"];
	$telefono=$_POST["tel"];
	$correo=$_POST["corr"];
	
	include "conexion.php";
	$sql ="insert into clientes value('$nombres','$contraseña','$apellidos','$direccion','$telefono','$correo')";
	$result = mysql_query($sql);
	header('Location: index.php');
?>
