<?php

	require_once("conexion.php");

	$insert = "UPDATE contador SET visitas = visitas + 1 WHERE id = '1' ";
	$update = $connect->query($insert);

?>

<!DOCTYPE html>
<html lang="es">
<head>

	<title>Document</title>
</head>
<body>
<p>Eres el visitante número <?php
	require_once("conexion.php");
	$consulta = $connect->query("SELECT * FROM contador WHERE id = '1' ");
	$registro = mysqli_fetch_array($consulta);
	do{
		$desc = $registro['visitas'];
		echo "$desc";
	}
	while ($registro = mysqli_fetch_array($consulta));
?> a nuestra página</p>

</body>
</html>
