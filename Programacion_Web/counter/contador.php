<?php

	require_once("conexion.php");

	$insert = "UPDATE contador SET visitas = visitas + 1 WHERE id = '1' ";
	$update = $connect->query($insert);

?>
