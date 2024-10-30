<?php
// título
$título = $_POST['subject'];

// mensaje
$mensaje = $_POST['message'];

// para
$para = $_POST['to'];

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= "To: {$_POST['to']} \r\n";
$cabeceras .= "From: {$_POST['from']}  \r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);

echo 'Enviado';
?>