<?php
class Producto{
	var $id_productos;
	var $atributo1;
	var $atributo2;
	var $atributo3;
	var $atributo4;
	var $atributo5;
	var $atributo6;
	var $atributo7;
	var $atributo8;
	var $atributo9;

	public function __construct($nro=0){
		if($nro!=0){
			$obj_prod = new sQuery();
			$resultado = $obj_prod->executeQuery("SELECT * FROM productos WHERE id_productos=$nro");
			$fila = mysqli_fetch_assoc($resultado);
			$this->id_productos=$fila['id_productos'];
			$this->atributo1=$fila['atributo1'];
			$this->atributo2=$fila['atributo2'];
			$this->atributo3=$fila['atributo3'];
			$this->atributo4=$fila['atributo4'];
			$this->atributo5=$fila['atributo5'];
			$this->atributo6=$fila['atributo6'];
			$this->atributo7=$fila['atributo7'];
			$this->atributo8=$fila['atributo8'];
			$this->atributo9=$fila['atributo9'];
		}
	}

	function get(){
		$obj_new = new sQuery();
		$resultado = $obj_new->executeQuery("SELECT * FROM productos WHERE atributo6='Espanol' ORDER BY id_productos ASC");
		return $resultado;
	}

	function getCpanel(){
		$obj_new = new sQuery();
		$resultado = $obj_new->executeQuery("SELECT * FROM productos ORDER BY id_productos ASC");
		return $resultado;
	}

	function get_eng(){
		$obj_new = new sQuery();
		$resultado = $obj_new->executeQuery("SELECT * FROM productos WHERE atributo6='Ingles' ORDER BY id_productos ASC");
		return $resultado;
	}

	function getProdMini(){
		$obj_new = new sQuery();
		$resultado = $obj_new->executeQuery("SELECT * FROM productos WHERE atributo6='Espanol' ORDER BY RAND() LIMIT 6");
		return $resultado;
	}

	function getengMini(){
		$obj_new = new sQuery();
		$resultado = $obj_new->executeQuery("SELECT * FROM productos  WHERE atributo6='Ingles' ORDER BY RAND() LIMIT 6");
		return $resultado;
	}

	function getrowID($var){
		$obj_new = new sQuery();
		$resultado = $obj_new->executeQuery("SELECT * FROM productos WHERE id_productos='$var'");
		return $resultado;
	}

	function getID(){ return $this->id_productos; }
	function get1(){ return $this->atributo1; }
	function get2(){ return $this->atributo2; }
	function get3(){ return $this->atributo3; }
	function get4(){ return $this->atributo4; }
	function get5(){ return $this->atributo5; }
	function get6(){ return $this->atributo6; }
	function get7(){ return $this->atributo7; }
	function get8(){ return $this->atributo8; }
	function get9(){ return $this->atributo9; }

	function set1($val){ $this->atributo1=$val; }
	function set2($val){ $this->atributo2=$val; }
	function set3($val){ $this->atributo3=$val; }	
	function set4($val){ $this->atributo4=$val; }
	function set5($val){ $this->atributo5=$val; }
	function set6($val){ $this->atributo6=$val; }
	function set7($val){ $this->atributo7=$val; }
	function set8($val){ $this->atributo8=$val; }
	function set9($val){ $this->atributo9=$val; }	

	function insert(){
			$obj_new=new sQuery();
			$query="insert into productos(atributo1, atributo2, atributo3, atributo4, atributo5, atributo6, atributo7, atributo8, atributo9)values('$this->atributo1','$this->atributo2','$this->atributo3','$this->atributo4','$this->atributo5','$this->atributo6','$this->atributo7','$this->atributo8','$this->atributo9')";
			$obj_new->executeQuery($query); 
	}	

	function update(){
			$obj_new=new sQuery();
			$query="update productos set atributo1='$this->atributo1', atributo2='$this->atributo2', atributo3='$this->atributo3', atributo4='$this->atributo4', atributo5='$this->atributo5', atributo6='$this->atributo6', atributo7='$this->atributo7', atributo8='$this->atributo8', atributo9='$this->atributo9' where id_productos = $this->id_productos";
			$obj_new->executeQuery($query);
	}

	function delete($val){
			$obj_new=new sQuery();
			$query="delete from productos where id_productos=$val";
			$obj_new->executeQuery($query);
	}

	function closeconexion(){
			$obj_new = new sQuery();
			$obj_new->Close();
	}	
}
?>