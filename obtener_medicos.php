<?php
include("php/conexion_be.php");

if (isset($_GET['id_especialidad'])) {
    $id_especialidad = $_GET['id_especialidad'];

    $sql_medicos = "SELECT id, nombres FROM doctor WHERE id_especialidad = '$id_especialidad'";
    $result_medicos = $conexion->query($sql_medicos);

    $medicos = array();

    if ($result_medicos->num_rows > 0) {
        while ($row_medico = $result_medicos->fetch_assoc()) {
            $medicos[] = $row_medico;
        }
    }

    echo json_encode($medicos);
}
?>
