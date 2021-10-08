<?php
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];

	$destinatario = "ruiz.rodrigo551@gmail.com";
	$asunto = "a entrado un mensaje";

	$cuerpo = "$nombre te envio un mensaje $correo $telefono";
	mail($destinatario, $asunto, $cuerpo );
		# code.
?>