<?php

	$errors = array();

	// Check if name has been entered
	if (!isset($_POST['name'])) {
		$errors['name'] = 'Por Favor Escriba su nombre completo';
	}

	// Check if email has been entered and is valid
	if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = 'Por favor ingrese un correo valido';
	}
   	
	//Check if telefono has been entered
	if (!isset($_POST['fono'])) {
		$errors['fono'] = 'Introduzca su numero telefonico';
	}

	//Check if telefono has been entered
	if (!isset($_POST['mensaje'])) {
		$errors['mensaje'] = 'Favor introduzca un mensaje válido';
	}

	if (!isset($_POST['asunto'])) {
		$errors['asunto'] = 'Favor indiquenos el motivo de su mensaje';
	}

	$errorOutput = '';
	
	if(!empty($errors)){

		/*$errorOutput .= '<div class="alert alert-danger alert-dismissible" role="alert">';
 		$errorOutput .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

		$errorOutput  .= '<ul>';*/

		foreach ($errors as $key => $value) {
			$errorOutput .= '<li>'.$value.'</li>';
		}

		$errorOutput .= '</ul>';
		$errorOutput .= '</div>';

		echo $errorOutput;
		die();
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$telefono = $_POST['fono'];
    $mensaje = $_POST['mensaje'];
    $asunto = $_POST['asunto'];
    

    switch ($asunto) {
    	case '1':
    		$from = $email;
	
			$to = 'malbornozgarcia@gmail.com';  // please change this email id
			$subject = 'NUEVO CONTACTO DESDE SITIO WEB DE SR.(A)' . $name;
		    
			$body = "Se ha contactado el siguiente cliente:\n\nNombre: ". $name . "\nTelefono: " . $telefono . "\nCorreo: " . $email . "\nAsunto: Atención Médica" . "\n\nMensaje: " . $mensaje;

		    
		    $headers = "MIME-Version: 1.0\r\n";
		    $headers.= "From: =?utf-8?b?".base64_encode($name)."?= ".$from."\r\n";
		    $headers.= "Content-Type: text/plain;charset=utf-8\r\n";
		    //$headers.= "Reply-To: $reply\r\n";  
		    $headers.= "X-Mailer: PHP/" . phpversion();

			//send the email
			$result = '';
			if (mail ($to, $subject, $body, $headers)) {
				/*$result .= '<div class="alert alert-success alert-dismissible" role="alert">';*/
				$result .= '<b>Gracias por conactarnos, en breve le responderemos.</b>';
				/*$result .= '</div>';*/

				echo $result;
				die();
			}

			$result = '';
    		break;
    	
    	case '2':
    		$from = $email;
	
			$to = 'm_albornozg@live.cl';  // please change this email id
			$subject = 'NUEVO CONTACTO DESDE SITIO WEB DE SR.(A)' . $name;
		    
			$body = "Se ha contactado el siguiente cliente:\n\nNombre: ". $name . "\nTelefono: " . $telefono . "\nCorreo: " . $email . "\nAsunto: Trabajar con nosotros" .  "\n\nMensaje: " . $mensaje;

		    
		    $headers = "MIME-Version: 1.0\r\n";
		    $headers.= "From: =?utf-8?b?".base64_encode($name)."?= ".$from."\r\n";
		    $headers.= "Content-Type: text/plain;charset=utf-8\r\n";
		    //$headers.= "Reply-To: $reply\r\n";  
		    $headers.= "X-Mailer: PHP/" . phpversion();

			//send the email
			$result = '';
			if (mail ($to, $subject, $body, $headers)) {
				/*$result .= '<div class="alert alert-success alert-dismissible" role="alert">';*/
				$result .= '<b>Gracias por conactarnos, en breve le responderemos.</b>';
				/*$result .= '</div>';*/

				echo $result;
				die();
			}

			$result = '';
    		break;
    	
    	case '3':
    		$from = $email;
	
			$to = 'administracion@llapemnsalud.cl';  // please change this email id
			$subject = 'NUEVO CONTACTO DESDE SITIO WEB DE SR.(A)' . $name;
		    
			$body = "Se ha contactado el siguiente cliente:\n\nNombre: ". $name . "\nTelefono: " . $telefono . "\nCorreo: " . $email . "\nAsunto: Trabaje con nosotros" .  "\n\nMensaje: " . $mensaje /*. "\n" . $adjunto*/;

		    
		    $headers = "MIME-Version: 1.0\r\n";
		    $headers.= "From: =?utf-8?b?".base64_encode($name)."?= ".$from."\r\n";
		    $headers.= "Content-Type: text/plain;charset=utf-8\r\n";
		    //$headers.= "Reply-To: $reply\r\n";  
		    $headers.= "X-Mailer: PHP/" . phpversion();

			//send the email
			$result = '';
			if (mail ($to, $subject, $body, $headers)) {
				/*$result .= '<div class="alert alert-success alert-dismissible" role="alert">';*/
				$result .= '<b>Gracias por conactarnos, en breve le responderemos.</b>';
				/*$result .= '</div>';*/

				echo $result;
				die();
			}

			$result = '';
    		break;
    }






	

?>