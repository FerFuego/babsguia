<?php
session_start();
require_once('conexion.php');

if ($_POST['usuario'] == "" or $_POST['contrasena'] == "") {
	$resultado = "<p>Complete todos los campos</p>";
	echo $resultado;
} else {
	$username = $_POST['usuario'];
	$password = $_POST['contrasena'];

	$datos = new login($username, $password);
	$users = $datos->loginDB();
	
	if ($users->num_rows > 0) {
		while ($row = $users->fetch_array()) {
			$_SESSION['idu'] 	 = $row['idusuarios'];
			$_SESSION['usuario'] = $username;
			$_SESSION['logino']	 = "yes";

			if ($_SESSION['idu'] == 1) {
				$_SESSION['id_admin'] = 1;
				$_SESSION['nombre']	= $row['usuario'];
				echo '<script>location.href="cpanel.php?categ=general";</script>';
			}

			echo "Ingresando...";
		}
	} else {
		echo "Usuario o Contraseña incorrecto";
	}
}
