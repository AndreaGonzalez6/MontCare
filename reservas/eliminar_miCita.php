<?php



	$id_reserva = $_GET['id_reserva'];
	include "../php/conexion_be.php";
	$query = mysqli_query($conexion,"DELETE FROM reservas WHERE id_reserva = '$id_reserva'");
	header ('Location: mis_citas.php?m=1');
	

?>
