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

		$idUnique = $_POST["idUser"];
	    $idUser = $_POST["idUser"];
	    $datos = $_POST["data"];
	    $banco = $_POST ["ban"];


	$queryInsert = "INSERT INTO barras(iduser, idunico, dato, banco)values('$idUser', '$idUnique', '$datos', '$banco')";

	mysqli_query($con, $queryInsert);

	echo json_encode("ok");


?>