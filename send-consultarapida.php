<?php
if($_POST['nombre']=="" OR $_POST['email']=="" OR $_POST['mensaje']==""){
	$resultado = "Completa todos los campos!";
	echo $resultado;
}else{
	$nombre = $_POST['nombre'];
	$nombre = stripslashes($nombre);
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$id = $_POST['id'];
	$tipo = $_POST['tipo'];
	$titulo = $_POST['titulo'];
	$mensaje = $_POST['mensaje'];
	$mensaje = stripslashes($mensaje);
/*---------------------------------------*/
$to = "turismo@babsguia.com";
$subject = "Mensaje de BABSguia\r\n";

$message  = '<html><body><img src="http://www.emeraldtranslation.com/img/logo.png" alt="logo" style="margin:0px auto 60px auto;"/>';
$message .= '<h1>Mensaje del sitio web enviado por '.$nombre.'</h1><hr style="width:100%; border:2px solid #CCC;" />';
$message .= '<p><b>Empresa:</b> '.$empresa.'</p>';
$message .= '<p><b>Pais:</b> '.$pais.'</p>';
$message .= '<p><b>Email:</b> '.$email.'</p>';
$message .= '<p><b>Telefono:</b>'.$telefono.'</p>';
$message .= '<h3>Asunto:</h3> '.$tipo.'<br>';
$message .= '<h3>#ID: '.$id.'</h3><p> '.$titulo.'</p><br>';
$message .= '<p><b>Mensaje:</b> '.$mensaje.'</p><hr style=" width:100%;border:2px solid #CCC;" />';
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