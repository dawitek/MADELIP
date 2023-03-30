<?php  //Proceso de datos

echo '<p>aqui se reciben los datos</p>';

// Antes de usar $_POST['valor']    
//if (isset($_POST['submit']))    
//{    
          // Instrucciones si $_POST['valor'] existe    
    

$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$textarea = $_POST['textarea'];

//}

echo "Es una Prueba";

echo '<p></p>';
echo $nombre;
echo '<p></p>';
echo $paterno;
echo '<p></p>';
echo $materno;
echo '<p></p>';
echo $email;
echo '<p></p>';
echo $tel;
echo '<p></p>';
echo $textarea;
	
	
	



?>
