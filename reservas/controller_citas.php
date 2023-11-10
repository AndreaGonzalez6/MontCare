<?php

include("../citas-medicas/includes/db.php");
include("../php/conexion_be.php");

$id_usuario = $_POST['id_usuario'];
$nombre_medico = $_POST['nombre_medico'];
$tipo_especialista = $_POST['tipo_especialista'];
$fecha_cita = $_POST['fecha_cita'];
$hora_cita = $_POST['hora_cita'];
$title = $tipo_especialista;
$start = $fecha_cita;
$end = $fecha_cita;
$color = "#2324ff";

$sentencia = $pdo->prepare('INSERT INTO reservas
(id_usuario,nombre_medico,tipo_especialista,fecha_cita,hora_cita,title,start,end,color, fyh_creacion, fyh_actualizacion)
VALUES ( :id_usuario,:nombre_medico,:tipo_especialista,:fecha_cita,:hora_cita,:title,:start,:end,:color,:fyh_creacion,:fyh_actualizacion)');

$sentencia->bindParam(':id_usuario',$id_usuario);
$sentencia->bindParam(':nombre_medico',$nombre_medico);
$sentencia->bindParam(':tipo_especialista',$tipo_especialista);
$sentencia->bindParam(':fecha_cita',$fecha_cita);
$sentencia->bindParam(':hora_cita',$hora_cita);
$sentencia->bindParam(':title',$title);
$sentencia->bindParam(':start',$start);
$sentencia->bindParam(':end',$end);
$sentencia->bindParam(':color',$color);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('fyh_actualizacion',$fechaHora);


if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Su cita ha sido agendada correctamente";
    $_SESSION['icono'] = 'success'; // Corrección del nombre del icono
    header('Location: http://localhost/MontCare/reservar.php'); // Corrección en la URL
} else {
    session_start();
    $_SESSION['mensaje'] = "Lo siento, su cita no se pudo agendar";
    $_SESSION['icono'] = 'error';
    header('Location: http://localhost/MontCare/reservar.php'); // Corrección en la URL
}
