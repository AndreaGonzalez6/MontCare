<?php

session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
	if($varsesion== null || $varsesion= ''){

	    header("Location:_sesion/login.php");
	
	}

	$id_reserva = $_GET['id_reserva'];
	include "db.php";
	$query = mysqli_query($conexion,"DELETE FROM reservas WHERE id_reserva = '$id_reserva'");
	header ('Location: ../views/citas.php?m=1');
	

?>
