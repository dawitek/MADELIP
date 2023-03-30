<?php
//conexion con la base de datos y el servidor
$link = mysql_connect("localhost","root"."") or die("<h2>No se encuentra el servidor</h2>");;
$db = mysql_select_db("usuarios",$link) or die("<h2>Error de conexion</h2>");

//obtenemos los valores del formulario
$Nombre=$_POST['Nombre'];
$A_paterno=$_POST['A_paterno'];
$A_materno=$_POST['A_materno'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$date=$_POST['date'];
$textarea=$_POST['textarea'];

/*
//Obtiene la longitud de un string
$req =(strlen($Nombre)*strlen($nick)*strlen($email)*strlen($passwd)*strlen($rPass)) or die ("No se han llenado todos los campos");

//se confirma la contraseña
if($passwd != $rPass){
	die('Las contrase&ntilde;as no coinciden <br><br><a href="registro.html" >Volver</a>');	
}

//SE ENCRIPTA LA CONTRASEÑA
$$contraseñaUsuario = md5($passwd); */

//ingresa la informacion a la tabla de datos
mysql_query("INSERT INTO contactos VALUES ('','$Nombre','A_paterno','A_materno','email','tel','date','textarea')",$link) or die("<h2>Error de envio");

echo '
	<h2>Registro completo</h2>
	<h5>Gracias por registrarse en nuestra web, ya puede ingresar como usuario</h5>
	<a href="login.html" >Logearse</a>
';
