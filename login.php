<?php
#conexion a la base de datos 
$conection = new mysqli("localhost", "root", "", "test" , "33061");

	#si se da clic en el boton infresar 
if (!empty($_POST["btnIngresar"])) {
	#verificar si los campos estan vacios 
	if (empty($_POST["users"]) || empty($_POST["password"])) {
		echo "<script> alert('Los campos estan vacios');window.location= 'index.html' </script>";
		
	} else {
		$usuario =$_POST["users"];
		$conraseña =$_POST["password"];
		$sql = $conection->query("SELECT * FROM login WHERE Usuario = '$usuario' and clave = '$conraseña' ");
		#verificar si la informacon de la base de datos es correcta
		if ($datos = $sql->fetch_object()) {
			echo "Bienvenido ".$usuario;

			
		} else {
			echo "<script> alert('El usuario o contraseña son incorectos');window.location= 'index.html' </script>";
		};
		
	};
	
};

	


	

?>