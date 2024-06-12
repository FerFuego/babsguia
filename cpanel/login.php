<?php
SESSION_START();
require_once('conexion.php');
if($_POST['usuario']=="" OR $_POST['contrasena']==""){
	$resultado = "<p>Complete todos los campos</p>";
	echo $resultado;
}else{
	$username = $_POST['usuario'];
	$password = $_POST['contrasena'];
	$passwords = md5($password);

	$datos= new login($username, $passwords);
	$datos=$datos->loginDB();
	$count=mysql_num_rows($datos);
	if ($count != 0 || $count != ''){
			while ($row = mysql_fetch_array($datos)) {
				$_SESSION['idu'] = $row['idusuarios'];
			}
			if($count==1){
					$_SESSION['usuario'] = $username;
					$_SESSION['logino'] = "yes";
					if($_SESSION['idu']==1){
						$_SESSION['id_admin']=1;
						$_SESSION['nombre'] =$row['usuario'];
						echo'<script>location.href="cpanel.php?categ=general";</script>';
					}
					$resultado = "Ingresando...";
					echo $resultado;
			}else {
				$resultado = "Usuario o Contraseña incorrecto";
				echo $resultado;
			}
	}else{
			$resultado = "Usuario o Contraseña incorrecto";
			echo $resultado;
		}
}
?>