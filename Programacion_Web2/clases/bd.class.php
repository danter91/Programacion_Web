<?php
//session_start();
// clase para el manejo de la conexion a base de datos
date_default_timezone_set('America/Bogota');
class bd{
	function bd(){
		$this->pwd="";
		$this->usuario="root";
		$this->servidor="127.0.0.1";
		$this->bd = "palopalito";
		$this->conexion="";
		$this->error="";
		$this->sentencia="";
		$this->muestra=0;
		$this->resultado="";
		$this->ultimo_id="";
		if(isset($_SESSION['user'])){
			$this->usuario_accion= $_SESSION['user'];
		}else{
			$this->usuario_accion= -1;
		}			
	}	

	// realiza la conexion a base de datos
	function fconectar(){
		$this->conexion = new mysqli($this->servidor, $this->usuario, $this->pwd, $this->bd);
		if ($this->conexion->connect_error) {
    		die('Error de Conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
		}		
	}
	//cierra la conexion a una base de datos
	function fdesconectar(){
		$this->conexion->close();
		$this->conexion="";
		$this->error="";
	}
	
	//ejecuta una sentencia sql
	function fsentencia(){
		//$this->muestra=1;
		$this->resultado="";
		$temp_resultado="";
		$temp = explode(" ",$this->sentencia);
		$temp[0] = strtoupper($temp[0]);
		$this->fconectar();
		if ($this->muestra == 1) echo $this->sentencia.";<br>";
		$result = $this->conexion->query($this->sentencia);
		if (!$result){
			$this->error = $this->conexion->error;
			$this->debug();
			$this->fdesconectar();
			return false;
		}else{
			if ($temp[0] == "INSERT"){ //ejecuto un select
				$this->ultimo_id = $this->conexion->insert_id;
			}else if ($temp[0] == "SELECT" || $temp[0] == "SHOW"){ //ejecuto un select
				$temp_while="";	
				while($temp_while = $result->fetch_array()){
					$temp_resultado[] = $temp_while;
				}
				if ($temp_resultado == ""){
					$this->resultado = NULL;
				}else{
					$this->resultado = $temp_resultado;
				}
			}
			if ($this->conexion->warning_count) {
			    if ($result = $this->conexion->query("SHOW WARNINGS")) {
			        $this->error= $result->fetch_row();
				}
			}
		}
		if ($this->error != ""){
			$this->debug();
			die();
		}
		//mysqli_free_result($result);
		$this->fdesconectar();
		unset($temp,$result,$temp_while);
	}
	
	//trae los modulos del sistema
	function fmodulo(){
		$this->sentencia="SELECT modulo_id,modulo_nombre FROM modulo ORDER BY modulo_orden ASC";
		$this->fsentencia();
		$this->modulo=$this->resultado;
	}
	
	//para mostrar como quedo el objeto
	function debug(){
		$this->pwd="";
		$this->usuario="";
		$this->servidor="";
		echo "<pre>";
		print_r($this);
		echo "</pre>";
	}
	
	function escapa(){
		$this->fconectar();
		$retorna=mysqli_real_escape_string($this->conexion,$this->escapar);
		$this->fdesconectar();
		return $retorna;
	}
}
?>