
<?php

	$idGrupo = $_POST["parametro1"];
	$idParticipante = $_POST["parametro2"];

	require_once 'participante.php';

	Participante::insertarParticipante($idGrupo, $idParticipante);

	header("Location: gruposDisponibles.php");
?>

