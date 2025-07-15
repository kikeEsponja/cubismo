<?php

include "./config.php";

if($_POST){
	$name=$_POST['nombre'];
	$email=$_POST['correo'];
	$password=$_POST['contras'];

	$chequeo = "SELECT * FROM usuarios WHERE nombre = '$name'";
	$result = mysqli_query($conn, $chequeo);

	if(mysqli_num_rows($result) > 0){
		echo "<h2 class='bad'>Usuario existente</h2><br><br><a href='./login.php'>volver</a>";
	}else{
		$sql="INSERT INTO `usuarios`(`nombre`, `correo`, `contras`) VALUES ('".$name."','".$email."','".$password."')";

		$query = mysqli_query($conn,$sql);
		if($query){
			session_start();
			$_SESSION['nombre'] = $name;
			header('Location: ./bienvenido.php');
		}else{
			echo "Algo salió mal";
		}
	}	
}