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

		//$nombre = $_POST["nombre_del_destinatario"];
	   // $idUser = $_POST["apellido_del_destinatario"];
	   // $datos = $_POST["data"];
	   // $banco = $_POST ["ban"];
 
    
        // Obtener los datos del formulario
   
    
        // Puedes añadir lógica de procesamiento de datos aquí.
    
        // Enviar respuesta con mensaje de éxito y datos recibidos
       
        $nombreDestinatario = $_POST["nombre_destinatario"];
        $apellidoDestinatario = $_POST["apellido_destinatario"];
        $nombreDepositante = $_POST["nombre_depositante"];
        $apellidoDepositante = $_POST["apellido_depositante"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $monto = $_POST["monto"];
        $detalle = $_POST["detalle"];
        $fecha = $_POST["fecha"];
    
        // Escapar los datos para prevenir inyección SQL
        $nombreDestinatario = mysqli_real_escape_string($con, $nombreDestinatario);
        $apellidoDestinatario = mysqli_real_escape_string($con, $apellidoDestinatario);
        $nombreDepositante = mysqli_real_escape_string($con, $nombreDepositante);
        $apellidoDepositante = mysqli_real_escape_string($con, $apellidoDepositante);
        $correo = mysqli_real_escape_string($con, $correo);
        $telefono = mysqli_real_escape_string($con, $telefono);
        $monto = mysqli_real_escape_string($con, $monto);
        $detalle = mysqli_real_escape_string($con, $detalle);
        
    
        // Construir la consulta de inserción
        $queryInsert = "INSERT INTO transferencias (
            primer_nombre, segundo_nombre, primer_apellido,segundo_apellido, 
            correo, telefono, monto, detalle
        ) VALUES (
            '$nombreDestinatario', '$apellidoDestinatario', '$nombreDepositante', '$apellidoDepositante', 
            '$correo', '$telefono', '$monto', '$detalle'
        )";
    
        // Ejecutar la consulta e informar del resultado
        if (mysqli_query($con, $queryInsert)) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Datos insertados correctamente'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Error al insertar los datos: ' . mysqli_error($con)
            ]);
        }
	
	echo json_encode("ok");


?>