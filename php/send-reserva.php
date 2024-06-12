<?php
if($_POST['nombre']=="" OR $_POST['email']=="" OR $_POST['mensaje']==""){
	$resultado = "Completa todos los campos!";
	echo $resultado;
}else{
	if($_POST['verif']!=''){
		//es spam
		exit();
	}

	$recaptcha = (isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null);
    $request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfqdvcpAAAAACv5r6D39wi5P6HRlJJ-ym53HoKR&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
    $response = json_decode($request);
    
    if ( $response->success === false ) {
        echo 'Captcha Incorrecto!';
        die();
    }
	
	$nombre = $_POST['nombre'];
	$nombre = stripslashes($nombre);
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$pais = $_POST['nacionalidad'];
	$direccion = $_POST['direccion'];
	$cantidad = $_POST['cantidad'];
	$nacimiento = $_POST['nacimiento'];
	$profesion = $_POST['profesion'];
	$empresa = $_POST['empresa'];
	$pasaporte = $_POST['pasaporte'];
	$alojamiento = $_POST['alojamiento'];
	$habitacion = $_POST['habitacion'];
	$vuelo = $_POST['vuelo'];
	$sexo = $_POST['sexo'];
	$tipo = $_POST['tipo'];
	$como = $_POST['como'];
	$nomb_emerge = $_POST['nomb-emerge'];
	$email_emerge = $_POST['email-emerg'];
	$tel_emerge = $_POST['tel-emerg'];
	$mensaje = $_POST['mensaje'];
	$mensaje = stripslashes($mensaje);
/*---------------------------------------*/
	$to = "turismo@babsguia.com";
	$subject = "Mensaje de BABSguia\r\n";

	$message  = '<html><body><img src="http://www.babsguia.com/img/logo.png" alt="logo" style="margin:0px auto 60px auto;"/>';
	$message .= '<h1>Correo enviado por '.$nombre.'</h1><hr style="width:100%; border:2px solid #CCC;" />';
	$message .= '<h3>Email:</h3> '.$email.'<br>';
	$message .= '<h3>Teléfono:</h3> '.$telefono.'<br>';
	$message .= '<h3>Sexo:</h3> '.$sexo.'<br>';
	$message .= '<h3>Nacionalidad:</h3> '.$pais.'<br>';
	$message .= '<h3>Dirección:</h3> '.$direccion.'<br>';
	$message .= '<h3>Fecha de Nacimiento:</h3> '.$nacimiento.'<br>';
	$message .= '<h3>Profesión:</h3> '.$profesion.'<br>';
	$message .= '<h3>Empresa:</h3> '.$empresa.'<br>';
	$message .= '<h3>Pasaporte:</h3> '.$pasaporte.'<br>';
	$message .= '<h3>Vuelo:</h3> '.$vuelo.'<br>';
	$message .= '<h3>Alojamiento:</h3> '.$alojamiento.'<br>';
	$message .= '<h3>Nº habitacion:</h3> '.$habitacion.'<br>';
	$message .= '<h3>Cantidad de Personas:</h3> '.$cantidad.'<br><hr>';
	$message .= '<h3>Contacto de emergencia</h3><br>';
	$message .= '<h3>Nombre :</h3> '.$nomb_emerge.'<br>';
	$message .= '<h3>Teléfono:</h3> '.$email_emerge.'<br>';
	$message .= '<h3>Email:</h3> '.$tel_emerge.'<br><hr>';
	$message .= '<h3>Asunto:</h3> '.$tipo.'<br>';
	$message .= '<h3>Mensaje:</h3><br>';
	$message .= '<p>'.$mensaje.'</p><br>';
	$message .= '<h3>¿Como conocio BABSguia?:</h3> '.$como.'<br>';
	$message .= '</body></html>';

	$header = "From: no-reply@babsguia.com\nReply-To:".$_POST["email"]."\n";
	$header .= "Mime-Version: 1.0\n";
	$header .= "Content-Type: text/html; charset=UTF-8\r\n";
	if(mail($to, $subject, $message ,$header)){
	echo'
	<html>
		<head>
			<meta http-equiv="REFRESH" content="2;url=../index.php">
		</head>
		<body>
			<div class="text-center alert alert-success">¡Tu mensaje se ha enviado correctamente!</div>
		</body>
	</html>';
	}else{
	echo'
	<html>
		<head>
			<meta http-equiv="REFRESH" content="2;url=../index.php">
		</head>
		<body>
			<div class="text-center alert alert-danger">¡Ocurrió un error, prueba de nuevo más tarde!</div>
		</body>
	</html>';
	}
}
?> 