<?php
class Usuario{
	var $idusuarios;
	var $fecha;
	var $password;
	var $nombre_apellido;
	var $dni;
	var $nacimiento;
	var $email;
	var $telefono;
	var $condicionuso;
	
	 function Usuario($nro=0){		
	 	if($nro!=0){
				$obj_usuario = new sQuery();
				$resultado = $obj_usuario->executeQuery("SELECT * FROM usuarios WHERE idusuarios=$nro");
				$fila=mysql_fetch_assoc($resultado);
				$this->id=$fila['idusuarios'];
				$this->fecha=$fila['fecha'];
				$this->password=$fila['password'];
				$this->nombre_apellido=$fila['nombre_apellido'];
				$this->dni=$fila['dni'];
				$this->nacimiento=$fila['nacimiento'];
				$this->email=$fila['email'];
				$this->telefono=$fila['telefono'];
				$this->condicionuso=$fila['condicionuso'];
			}
	}
	//funcion simple que trae todos los registros
		function getUsuarios(){
			$obj_usuario = new sQuery();
			$resultado = $obj_usuario->executeQuery("SELECT * FROM usuarios");
			return $resultado;
		}

		function getID(){ return $this->idusuarios; }
		function getFecha(){ return $this->fecha; }
		function getNombre(){ return $this->nombre_apellido; }
		function getDNI(){ return $this->dni; }
		function getFNacim(){  return $this->nacimiento; }
		function getEmail(){  return $this->email; }
		function getTelefono(){  return $this->telefono; }
		function getUSO(){  return $this->condicionuso; }

		function setFecha($val){ $this->fecha=$val; }
		function setPass($val){ $this->password=$val; }
		function setNombre($val){ $this->nombre_apellido=$val; }
		function setDNI($val){ $this->dni=$val; }
		function setFNacim($val){ $this->nacimiento=$val; }
		function setEmail($val){ $this->email=$val; }
		function setTelefono($val){ $this->telefono=$val; }
		function setUSO($val){ $this->condicionuso=$val; }

		function insertUsuario(){
			$obj_usuario = new sQuery();
			$obj_usuario->executeQuery("INSERT INTO usuarios(fecha, password, nombre_apellido, dni, nacimiento, email, telefono, condicionuso)values('$this->fecha','$this->password','$this->nombre_apellido','$this->dni','$this->nacimiento','$this->email','$this->telefono','$this->condicionuso')");
			$user=mysql_insert_id();
			return $user;
		}

		function updateUsuario(){
			$obj_usuario = new sQuery();
			$obj_usuario->executeQuery("UPDATE usuarios SET password='$this->password', nombre_apellido='$this->nombre_apellido', dni='$this->dni', nacimiento='$this->nacimiento', email='$this->email', telefono='$this->telefono' WHERE idusuarios=$this->idusuarios");
		}

		function updatePassUsuario(){
			$obj_usuario = new sQuery();
			$obj_usuario->executeQuery("UPDATE usuarios SET  password='$this->password', fecha='$this->fecha' WHERE idusuarios=$this->idusuarios");
		}

		function deleteUsuario($val){
			$obj_usuario = new sQuery();
			$obj_usuario->executeQuery("DELETE FROM usuarios WHERE idusuarios!=1 AND idusuarios=$val");
		}

		function closeconexion(){
			$obj_usuario = new sQuery();
			$obj_usuario->Close();
		}

}
?>