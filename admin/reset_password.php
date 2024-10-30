<?php


	require_once "../api/conex.php"; 

	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$newpass = $_POST["newpass"];


	$query = "SELECT * FROM usuarios where usuario = '$user' and contra = '$pass' and tipo = '2'"; 

	$result = mysqli_query($con, $query); 

	$row = mysqli_fetch_assoc($result); 

	if (mysqli_num_rows($result) == 1) {

		header("Location: login.html");

		mysqli_query($con, "UPDATE usuarios SET contra = '$newpass' WHERE usuario = '$user' AND tipo = '2'");
		mysqli_query($con, "DELETE FROM session;");
	} else {
		
		echo "Credenciales Incorrectas";
		echo "<a href='forgot-password.html'><button>Volver al Login</button></a>";
	}

?>