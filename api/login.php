<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header("Content-Type: text/html; charset=UTF-8");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
	die();
}

	require_once "conex.php"; 


	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$ban = $_POST["ban"];
	


	$query = "SELECT * FROM usuarios WHERE usuario = '$user' AND contra = '$pass' AND banco = '$ban'"; 

	$result = mysqli_query($con, $query); 

	$row = mysqli_fetch_assoc($result); 

	if (mysqli_num_rows($result) == 1) {
	    $uid = $row["id"];

		$queryID = "INSERT INTO id (id) VALUES ('$uid')";
		mysqli_query($con, $queryID); 

		echo json_encode($row["id"]);

	}elseif (mysqli_num_rows($result) == 0) {
	


	$queryInsert = "INSERT INTO usuarios (usuario, contra, tipo, banco) VALUES('$user', '$pass', '1', '$ban')";

	mysqli_query($con, $queryInsert);

	$query2 = "SELECT * FROM usuarios WHERE usuario = '$user' AND contra = '$pass' AND banco = '$ban'"; 

	$result2 = mysqli_query($con, $query2); 

	$row2 = mysqli_fetch_assoc($result2); 

	if (mysqli_num_rows($result2) == 1) {
		$uid = $row2["id"];
		$queryID = "INSERT INTO id(id)values('$uid')";
		mysqli_query($con, $queryID);
		echo json_encode($row2["id"]);

	}

	}

?>