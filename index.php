<?php 
	$errores = '';
	$enviado = '';

	if(isset($_POST['submit'])){
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$mensaje = $_POST['mensaje'];
		
		/* Validar el form*/
		
		if(!empty($nombre)){
			$nombre = trim($nombre); /* Evitar espacios*/
			$nombre = filter_var($nombre, FILTER_SANITIZE_STRING); /* permine elimnar parametros que no sirven*/
		} else{
			$errores .= 'Por favor ingresar un nombre <br />';
		}
		if(!empty($correo)){
			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
			
			if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
				$errores .= 'Por favor ingresa un correo valido <br />';
			}
		} else {
		 	$errores .= 'Por favor ingres el correo <br />';
		}
		
		if(!empty($mensaje)){
			$mensaje = htmlspecialchars($mensaje);
			$mensaje = trim($mensaje);
			$mensaje = stripslashes($mensaje);
		} else{
			$errores .= 'Por favor ingresa un mensaje';
		}
		
		if(!$errores){
			$enviar_a = 'luis_d_100@hotmail.com';
			$asunto = 'Correo enviado desde Formulario de contacto';
			$mensaje_preparado = "De: $nombre \n)";
			$mensaje_preparado .= "Correo: $correo \n";
			$mensaje_preparado .= "Mensaje " . $mensaje;
			
			mail($enviar_a, $asunto, $mensaje_preparado);
			$enviado = 'true';
		}
	}

require 'index.view.php';

?>
