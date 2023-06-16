<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Documento sin titulo</title>
</head>
<body>

<?php

//----------------------------------------------SESSION--------------------------------------------------------------

	session_start();
			
		//almacenar en la variable session el login del usuario
		$_SESSION["usuario"]=$_POST["usuario"];
			
		header("Location:menu.php");

//----------------------------------------------CONEXION--------------------------------------------------------------

	$conn = new mysqli("localhost", "root", "", "cell2");

	if($conn->connect_errno){

		echo "No hay conexion: (" . $conn->connect_errno . ")" . $conn->connect_errno;
	}
	

//----------------------------------------------REGISTRO--------------------------------------------------------------

	$nom=$_POST['nombre'];
	$ape=$_POST['apellido'];
	$usu=$_POST['usuario'];
	$pass=$_POST['password'];


	if(isset($_POST["registrate"])){

		$pass_fuerte = password_hash($pass, PASSWORD_DEFAULT);

		$query_registrar = "INSERT INTO usuarios (nombre, apellido, usuario, contraseña) VALUES ('$nom', '$ape', '$usu', '$pass_fuerte')";

		if(mysqli_query($conn, $query_registrar)){

			header("Location:mensaje.php");

			//echo "<script>alert('Usuario registrado: $usu') ;window.location='index.php'</script>";

		}else{

			echo "El usuario no fue registrado, Error: . $query_registrar . <br> " . mysql_error($conn);
		}
	}

//-----------------------------------------------LOGUEO-----------------------------------------------------------------

	if(isset($_POST['ingresar'])){

        //Buscar usuario
		$query_usuario = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$usu'");

        //cantidad de filas encontradas
		$nr = mysqli_num_rows($query_usuario);

        //columnas del usuario encontrado
		$buscar_pass = mysqli_fetch_array($query_usuario);

		//desencriptar contraseña
		if(($nr == 1) && (password_verify($pass, $buscar_pass['contraseña']))){

			header("Location:menu.php");

		}else{

			header("Location:mensaje2.php");
			

			//echo "<script>alert('Usuario o contraseña incorrecto');window. header(location='index.php');</script>";
		}
	}


	?>

</body>
</html>