<?php

$server = " phpMyAdmin demo - MySQL"; 
$user = "root"; 
$pass = "";
$db = "PRUEBA"; 

$con = mysqli_connect($server,$user,$pass,$db) or die("Problemas de conexion");
?>