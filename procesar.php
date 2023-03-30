<?php  //Proceso de datos

//Conexion a la base de datos
include_once('db.php');

// Antes de usar $_POST['valor']    
//if (isset($_POST['submit']))    
//{    
          // Instrucciones si $_POST['valor'] existe 

echo '<p>aqui se reciben los datos</p>';

$Nombre = $_POST['Nombre'];
$A_paterno = $_POST['A_paterno'];
$A_materno = $_POST['A_materno'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$date = $_POST['date'];	
$textarea = $_POST['textarea'];

//}

echo "Los datos que se recibieron son: <br>";

echo '<p></p>';
echo $Nombre;
echo '<p></p>';
echo $A_paterno;
echo '<p></p>';
echo $A_materno;
echo '<p></p>';
echo $email;
echo '<p></p>';
echo $tel;
echo '<p></p>';
echo $date;
echo '<p></p>';
echo $textarea;
	

//<!-- consulta sql datos basicos BD -->
	
	$conectar=conn(); //Ejecutar la conexion a la base de datos
	$sql="INSERT INTO contactos (Nombre, A_paterno, A_materno, email, tel, date, textarea)
	VALUES ('$Nombre' , '$A_paterno' , '$A_materno' , '$email' , '$tel' , '$date' , '$textarea')";
	$resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar));

	echo "$sql";



?>
