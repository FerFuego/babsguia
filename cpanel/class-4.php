<?php
class Tour{
	var $id_tour;
	var $atributo1;
	var $atributo2;
	var $atributo3;
	var $atributo4;
	var $atributo5;
	var $atributo6;
	var $atributo7;
	var $atributo8;
	var $atributo9;
	var $atributo10;
	var $atributo11;
	var $atributo12;
	var $atributo13;
	var $atributo14;
	var $atributo15;
	var $atributo16;
	var $atributo17;

	public function __construct($nro=0){
		if($nro!=0){
			$obj_prod = new sQuery();
			$resultado = $obj_prod->executeQuery("SELECT * FROM tours WHERE id_tour=$nro");
			$fila=mysqli_fetch_assoc($resultado);
			$this->id_tour=$fila['id_tour'];
			$this->atributo1=$fila['atributo1'];
			$this->atributo2=$fila['atributo2'];
			$this->atributo3=$fila['atributo3'];
			$this->atributo4=$fila['atributo4'];
			$this->atributo5=$fila['atributo5'];
			$this->atributo6=$fila['atributo6'];
			$this->atributo7=$fila['atributo7'];
			$this->atributo8=$fila['atributo8'];
			$this->atributo9=$fila['atributo9'];
			$this->atributo10=$fila['atributo10'];
			$this->atributo11=$fila['atributo11'];
			$this->atributo12=$fila['atributo12'];
			$this->atributo13=$fila['atributo13'];
			$this->atributo14=$fila['atributo14'];
			$this->atributo15=$fila['atributo15'];
			$this->atributo16=$fila['atributo16'];
			$this->atributo17=$fila['atributo17'];
		}
	}

	function get(){
		$obj_new = new sQuery();
		$resultado = $obj_new->executeQuery("SELECT * FROM tours WHERE atributo16='Espanol' and atributo1!='miradadiferente' ORDER BY atributo1 ASC");
		return $resultado;
	}

	function getCpanel(){
		$obj_new = new sQuery();
		$resultado = $obj_new->executeQuery("SELECT * FROM tours ORDER BY atributo1 ASC");
		return $resultado;
	}

	function get_eng(){
		$obj_new = new sQuery();
		$resultado = $obj_new->executeQuery("SELECT * FROM tours WHERE atributo16='Ingles' and atributo1!='miradadiferente' ORDER BY id_tour ASC");
		return $resultado;
	}

	function getrowID($var){
		$obj_new = new sQuery();
		$resultado = $obj_new->executeQuery("SELECT * FROM tours WHERE id_tour='$var'");
		return $resultado;
	}

	function getMini(){
		$obj_new = new sQuery();
		$resultado = $obj_new->executeQuery("SELECT * FROM tours WHERE atributo16='Espanol' and atributo1='miradadiferente' ORDER BY RAND() LIMIT 6");
		return $resultado;
	}

	function getengMini(){
		$obj_new = new sQuery();
		$resultado = $obj_new->executeQuery("SELECT * FROM tours  WHERE atributo16='Ingles' and atributo1='miradadiferente' ORDER BY RAND() LIMIT 6");
		return $resultado;
	}

	function getID(){ return $this->id_tour; }
	function get1(){ return $this->atributo1; }
	function get2(){ return $this->atributo2; }
	function get3(){ return $this->atributo3; }
	function get4(){ return $this->atributo4; }
	function get5(){ return $this->atributo5; }
	function get6(){ return $this->atributo6; }
	function get7(){ return $this->atributo7; }
	function get8(){ return $this->atributo8; }
	function get9(){ return $this->atributo9; }
	function get10(){ return $this->atributo10; }
	function get11(){ return $this->atributo11; }
	function get12(){ return $this->atributo12; }
	function get13(){ return $this->atributo13; }
	function get14(){ return $this->atributo14; }
	function get15(){ return $this->atributo15; }
	function get16(){ return $this->atributo16; }
	function get17(){ return $this->atributo17; }

	function set1($val){ $this->atributo1=$val; }
	function set2($val){ $this->atributo2=$val; }
	function set3($val){ $this->atributo3=$val; }	
	function set4($val){ $this->atributo4=$val; }
	function set5($val){ $this->atributo5=$val; }
	function set6($val){ $this->atributo6=$val; }
	function set7($val){ $this->atributo7=$val; }
	function set8($val){ $this->atributo8=$val; }
	function set9($val){ $this->atributo9=$val; }
	function set10($val){ $this->atributo10=$val; }
	function set11($val){ $this->atributo11=$val; }
	function set12($val){ $this->atributo12=$val; }
	function set13($val){ $this->atributo13=$val; }
	function set14($val){ $this->atributo14=$val; }
	function set15($val){ $this->atributo15=$val; }
	function set16($val){ $this->atributo16=$val; }	
	function set17($val){ $this->atributo17=$val; }	

	function insert(){
			$obj_new=new sQuery();
			$query="insert into tours(atributo1, atributo2, atributo3, atributo4, atributo5, atributo6, atributo7, atributo8, atributo9, atributo10, atributo11, atributo12, atributo13, atributo14, atributo15, atributo16, atributo17)values('$this->atributo1','$this->atributo2','$this->atributo3','$this->atributo4','$this->atributo5','$this->atributo6','$this->atributo7','$this->atributo8','$this->atributo9','$this->atributo10','$this->atributo11','$this->atributo12','$this->atributo13','$this->atributo14','$this->atributo15','$this->atributo16','$this->atributo17')";
			$obj_new->executeQuery($query); 
	}	

	function update(){
			$obj_new=new sQuery();
			$query="update tours set atributo1='$this->atributo1', atributo2='$this->atributo2', atributo3='$this->atributo3', atributo4='$this->atributo4', atributo5='$this->atributo5', atributo6='$this->atributo6', atributo7='$this->atributo7', atributo8='$this->atributo8', atributo9='$this->atributo9', atributo10='$this->atributo10', atributo11='$this->atributo11', atributo12='$this->atributo12', atributo13='$this->atributo13', atributo14='$this->atributo14', atributo15='$this->atributo15', atributo16='$this->atributo16', atributo17='$this->atributo17' where id_tour = $this->id_tour";
			$obj_new->executeQuery($query);
	}

	function delete($val){
			$obj_new=new sQuery();
			$query="delete from tours where id_tour=$val";
			$obj_new->executeQuery($query);
	}

	function closeconexion(){
			$obj_new = new sQuery();
			$obj_new->Close();
	}	
}
?>