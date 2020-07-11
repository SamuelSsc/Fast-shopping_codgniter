<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "fast_shopping";

	$mysqli = new mysqli($host, $usuario, $senha, $bd)

	if($mysqli->conect_errno)
		echo "Falha na conexão:(" .$mysqli->conect_errno).")".$mysqli->conect_error;

?>