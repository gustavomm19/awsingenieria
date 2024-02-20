<?php 
	$enviado = false;
	$exc = false;
	if(isset($_POST['submit'])){
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$asunto = $_POST['asunto'];
		$mensaje = $_POST['mensaje'];

		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		$asunto = htmlspecialchars($asunto);
		$asunto = filter_var($asunto, FILTER_SANITIZE_STRING);
	
		$mesnaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);

		$enviar_a = 'awsingenieria@yahoo.com';
		$texto = "De: $nombre \n";
		$texto .= "Correo: $correo \n";
		$texto .= "$mensaje";

		if($asunto == '' || $asunto == null){
			$asunto = 'Mensaje de la página web';
		}

		try{
			mail($enviar_a, $asunto, $texto);
			$enviado=true;
		}catch(Exception $e){
			$exc=true;
		}
		
	}

?>