<?php
include('../phpmailer-master/src/Exception.php');
include('../phpmailer-master/src/PHPMailer.php');
include('../phpmailer-master/src/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>

<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BABSguía</title>
	<link rel="shortcut icon" href="../img/favicon.png"/> 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/nivo-lightbox.css" >
	<link rel="stylesheet" href="../css/nivo_lightbox_themes/default/default.css">
	<link rel="stylesheet" href="../css/owl.carousel.css"  media="screen">
	<link rel="stylesheet" href="../css/owl.theme.css"  media="screen">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/personalizado.css">
	<script type="text/javascript" src="../js/modernizr.js"></script>
</head>
<body>
<div id="cd-logo"><a href="index_eng.php"><img src="img/logo.png" alt="Logo"></a></div>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="../index_eng.php" class="logog"><img src="../img/logo.png" alt="Logo">
	</div>
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav navbar-biz">
			<li><a></a></li>
			<li><a href="../index_eng.php#cd-placeholder-1"><b>BABSGUÍA</b></a></li>
			<li><a href="../index_eng.php#cd-placeholder-2"><b>Tours</b></a></li>
			<li><a href="../index_eng.php#cd-placeholder-3"><b>Services</b></a></li>
			<li><a href="../index_eng.php#cd-placeholder-4"><b>Reservations</b></a></li>
			<li><a href="../index_eng.php#cd-placeholder-5"><b>News</b></a></li>
			<li><a href="../index_eng.php#cd-placeholder-6"><b>Links</b></a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="contacto_eng.php" class="cd-btn tf-btn color">Contact Us</a></li>
		</ul>
	</div>
</nav>
<br><br><br><br><br><br><br><br>
<?php
if($_POST['nombre']=="" OR $_POST['email']=="" OR $_POST['mensaje']==""){
	$resultado = "It completes all the fields!";
	echo $resultado;
}else{

	if($_POST['verif']!=''){
		//es spam
		exit();
	}
	$nombre = $_POST['nombre'];
	$nombre = stripslashes($nombre);
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$id = $_POST['id'];
	$tipo = $_POST['tipo'];
	$titulo = $_POST['titulo'];
	$cantidad = $_POST['cantidad'];
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
		$message .= '<p><b>Email:</b> '.$email.'</p>';
		$message .= '<p><b>Telefono:</b>'.$telefono.'</p>';
		$message .= '<p><b>Cantidad de Pasajeros:</b>'.$cantidad.'</p>';
		$message .= '<h3>Asunto:</h3> '.$tipo.'<br>';
		$message .= '<h3>#ID: '.$id.'</h3><p> '.$titulo.'</p><br>';
		$message .= '<p><b>Mensaje:</b> '.$mensaje.'</p><hr style=" width:100%;border:2px solid #CCC;" />';
		$message .= '</body></html>';

		//Content
		$mail->isHTML(true);                   
		$mail->Subject = 'Mensaje de BABSguia\r\n';
		$mail->Body    = $message;
		$mail->send();

		echo'<div class="text-center alert alert-success">Your message has been sent correctly!</div>
		<br><br><a href="javascript: window.history.back()" class="btn btn-danger"> <span class="fa fa-reply-all"></span> Go Back</a>';

	} catch (Exception $e) {
		echo'<div class="text-center alert alert-danger">A mistake happened, try again later!</div>
		<br><br><a href="javascript: window.history.back()" class="btn btn-danger"> <span class="fa fa-reply-all"></span> Go Back</a>';

		//echo "¡Ocurrió un error, prueba de nuevo más tarde: {$mail->ErrorInfo}";

	}
}
?>
<div style="width:100%; height:220px;" class="espacio"></div>
<div id="tf-footer">
        <div class="container"><!-- container -->
            <p class="pull-left text-footer">© Copyright 2008 | All rights reserved
                <br>BABSGUIA of Bárbara Bossi file N° 746 - G - PST Government of the City of Buenos Aires
            </p> <!-- copyright text here-->
            <ul class="list-inline social pull-right">
                <li><img src="../img/logo-xs.png" ></li>
                <li><a href="http://es-la.facebook.com/profile.php?id=100000959273538" target="_blank"><i class="fa fa-facebook"></i></a></li> 
                <li><a href="http://www.twitter.com/babsguia" target="_blank"><i class="fa fa-twitter"></i></a></li> 
                <li><a href="http://ar.linkedin.com/in/babsguia" target="_blank"><i class="fa fa-linkedin"></i></a></li> 
                <li><a href="https://www.facebook.com/pages/BabsGuia-BA/1403468569887699?ref=hl" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href=" http://babsguia.blogspot.com.ar/" target="_blank"><img src="../img/blogger.png"></a></li> 
                <li><a href="skype:babsguia?call"><i class="fa fa-skype"></i></a></li> 
            </ul>
        </div><!-- end container -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.1.11.1.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/funciones.js"></script>
<script type="text/javascript" src="../js/owl.carousel.js"></script><!-- Owl Carousel Plugin -->
<script type="text/javascript" src="../js/SmoothScroll.js"></script>
<script type="text/javascript" src="../js/skrollr.js"></script>
<script type="text/javascript" src="../js/imagesloaded.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.js"></script>
<script type="text/javascript" src="../js/nivo-lightbox.min.js"></script>
<script type="text/javascript" src="../js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="../js/contact.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>