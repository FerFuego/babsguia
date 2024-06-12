<?php
SESSION_START();
header('Content-type: text/html; charset=utf-8');
date_default_timezone_set("America/Argentina/Buenos_Aires");
if (isset($_SESSION['login'])) {
	if ($_SESSION['login'] == "yes") {
	} else {
		$_SESSION['login'] = "no";
	}
} else {
	$_SESSION['login'] = "no";
}
require_once("cpanel/conexion.php");
require_once("cpanel/class-1.php");
require_once('cpanel/class-2.php');
require_once('cpanel/class-3.php');
require_once('cpanel/class-4.php');
require_once('cpanel/class-5.php');
require_once('cpanel/class-6.php');
require_once('cpanel/class-7.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<?php require_once("cpanel/head-cpanel.php"); ?>
</head>

<body>
	<section id="header">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<?php require_once("cpanel/nav-cpanel.php"); ?>
		</nav>
	</section>
	<div id="content">
		<?php
		if (isset($_SESSION['logino']) && isset($_SESSION['id_admin'])) {
			if (isset($_GET['categ'])) {
				switch ($_GET['categ']) {
					case 'general':
						require_once("cpanel/general.php");
						break;
					case '1':
						require_once("cpanel/1.php");
						break;
					case '2':
						require_once("cpanel/2.php");
						break;
					case '3':
						require_once("cpanel/3.php");
						break;
					case '4':
						require_once("cpanel/4.php");
						break;
					case '5':
						require_once("cpanel/5.php");
						break;
						//case '6': require_once("cpanel/6.php");	break;
					case '7':
						require_once("cpanel/7.php");
						break;
					default:
						require_once("cpanel/general.php");
						break;
				}
			} else {
				echo '<html><head><meta http-equiv="REFRESH" content="0;url=cpanel.php?categ=general"></head></html>';
			}
		} else {
			echo '<html><head></head><body><br><br><div class="alert alert-info aviso_session"><a href="javascript:;" onClick="showMe()">Inicia session!</a></div></body></html>';
		}
		?>
	</div>
	<footer id="footer">
		<?php require_once("cpanel/footer.php"); ?>
	</footer>
</body>

</html>
<!-- formlogin -->
<div id="login_container">
	<div class="login" id="login">
		<form role="form">
			<input type="text" class="form-control" required name="usuario" placeholder="Ingresa tu email" id="valor1"><br>
			<input type="password" class="form-control" required name="contrasena" placeholder="Contraseña" id="valor2"><br>
			<input type="submit" href="javascript:;" onclick="realizaProceso((document.getElementById('valor1').value), (document.getElementById('valor2').value));return false;" class="btn btn-warning " value="Ingresar" />
			<br><span id="resultado"></span>
		</form>
	</div>
</div>
<div id="aviso_registro"></div>
<!-- formlogin -->