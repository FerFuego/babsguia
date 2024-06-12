<?php
include('../phpmailer-master/src/Exception.php');
include('../phpmailer-master/src/PHPMailer.php');
include('../phpmailer-master/src/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_POST['nombre']=="" OR $_POST['email']=="" OR $_POST['mensaje']=="") {

	$resultado = "Completa todos los campos!";
	echo $resultado;

} else {

	if($_POST['verif']!=='') exit(); //es spam

	$recaptcha = (isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null);
    $request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfqdvcpAAAAACv5r6D39wi5P6HRlJJ-ym53HoKR&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
    $response = json_decode($request);
    
    if ( $response->success === false ) {
        echo 'Captcha Incorrecto!';
        die();
    }

	$nombre = $_POST['nombre'];
	$nombre = stripslashes($nombre);
	$email  = $_POST['email'];
	$telefono  = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$cantidad  = $_POST['cantidad'];
	$fecha = $_POST['fecha'];
	$tipo  = $_POST['tipo'];
	$como  = $_POST['como'];
	$mensaje = $_POST['mensaje'];
	$mensaje = stripslashes($mensaje);

	/*---------------------------------------*/
	$mail = new PHPMailer(true);

	try {	
		//Server settings
		$mail->isSMTP();
		$mail->Host       = 'smtp.correoseguro.co';
		$mail->SMTPAuth   = true;
		$mail->Username   = 'turismo@babsguia.com';
		$mail->Password   = 'b2bsg162';
		$mail->SMTPSecure = 'SSL';
		$mail->Port       = 587;

		//Recipients
		$mail->setFrom('noreply@babsguia.com', 'Babsguia');
		$mail->addAddress('turismo@babsguia.com', 'Turismo');
		$mail->addReplyTo($email, 'Usuario');

		// Mensaje
		$message  = '<html><body><img src="http://www.babsguia.com/img/logo.png" alt="logo" style="margin:0px auto 60px auto;"/>';
		$message .= '<h1>Mensaje del sitio web enviado por '.$nombre.'</h1><hr style="width:100%; border:2px solid #CCC;" />';
		$message .= '<p><b>Email: </b> '.$email.'</p>';
		$message .= '<p><b>Telefono: </b>'.$telefono.'</p>';
		$message .= '<p><b>Pais de Residencia: </b>'.$direccion.'</p>';
		$message .= '<p><b>Cantidad de pasajeros: </b>'.$cantidad.'</p>';
		$message .= '<p><b>Fecha: </b>'.$fecha.'</p>';
		$message .= '<p><b>Tipo: </b>'.$tipo.'</p>';
		$message .= '<p><b>Como nos conocio? </b>'.$como.'</p>';
		$message .= '<p><b>Mensaje: </b> '.$mensaje.'</p><hr style=" width:100%;border:2px solid #CCC;" />';
		$message .= '</body></html>';

		//Content
		$mail->isHTML(true);                   
		$mail->Subject = 'Mensaje de BABSguia\r\n';
		$mail->Body    = $message;
		$mail->send();

		echo'
		<html>
			<head>
				<meta http-equiv="REFRESH" content="2;url=../contacto.php">
			</head>
			<body>
				<div class="text-center alert alert-success">¡Tu mensaje se ha enviado correctamente!</div>
			</body>
		</html>';

	} catch (Exception $e) {

		echo "¡Ocurrió un error, prueba de nuevo más tarde: {$mail->ErrorInfo}";

	}
}
?> 