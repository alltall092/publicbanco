<?php


	require_once "conex.php"; 

	$user = $_POST["user"];
	$pass = $_POST["pass"];


	$query = "SELECT * FROM usuarios where usuario = '$user' and contra = '$pass' and tipo = '2'"; 

	$result = mysqli_query($con, $query); 

	$row = mysqli_fetch_assoc($result); 

	if (mysqli_num_rows($result) == 1) {

		if ( ! session_id() ) @ session_start();

		$hash = md5('tri' . date('dMyyyyhis') . ':xx');
		$_SESSION['hash'] = $hash;
	//	exit(var_dump($_SESSION));
		mysqli_query($con, "INSERT INTO session VALUE ('$hash');");

		header("Location: /mailer/formulario.php");

	}else{
		
		echo "Credenciales Incorrectas";
		echo "<a href='/mailer/index.html'><button>Volver al Login</button></a>";
	}

?>