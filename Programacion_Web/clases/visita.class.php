<?php
class visita{
    function visita($id=false){
        global $bd;
		$this->visita_id="";
        $this->visita_fecha="";
        $this->visita_ip="";
        if ($id){
			$this->visita_id=$id;
        }
    }

    function fguarda(){
        global $bd;
        $bd->sentencia = "INSERT INTO visita (visita_ip,visita_fecha)VALUES('".$this->visita_ip."','".date("Y-m-d")."')";
        $bd->fsentencia();
    }
	
	function fcantidad(){
		global $bd;
		$bd->sentencia = "SELECT max(visita_id) as cantidad FROM visita";
		$bd->fsentencia();
		?>
		Visitas: <?php echo $bd->resultado[0]['cantidad']; ?>
		<?php
	}
}
?>