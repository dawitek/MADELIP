<?php


//Configuracion necesaria para acceder a la base de datos.

function conn(){
	$hostname = "localhost";
	$usuariodb = "root";
	//$passworddb ="";
	$dbname = "contactos";
	
	//Generando la conexion con el servidor
	$conectar = mysqli_connect($Nombre , $A_paterno , $A_materno , $email , $tel , $date , $textarea);
	return $conectar;
	
}

?>