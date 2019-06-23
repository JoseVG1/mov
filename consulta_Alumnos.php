<?php
	$servername = "localhost";
	$username = "root";
	$dbname   = "mov_protecciv";
	$password = "password";				
	

	/*$nombre    = $_POST['id_alumnos'];
	$apellidop = $_POST['nombre'];
	$apellidom = $_POST['apellidos'];
	$apellidox = $_POST['telefono'];*/
	
	//echo "Hello, World!"."\n";	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 	
	
	$sql = "SELECT id_alumnos, nombre, apellidos, telefono FROM alumnos";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "id: " . $row["id"]. " - Name: " . $row["nombre"]. " " . $row["apellidop"]. " " . $row["apellidom"]. "\n";
			echo $row["id_alumnos"].",". $row["nombre"].",". $row["apellidos"].",". $row["telefono"]. "\n";
		}
	} else {
		echo "0 results";
	}	
	
	$conn->close();
	//die ('Finalizando...');
	die ('');

 
?>
