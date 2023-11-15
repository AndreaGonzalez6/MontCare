<?php
// Incluir archivo de conexión a la base de datos
include 'php/conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idPaciente = $_POST["id_paciente"];
    $alergias = $_POST["alergias"];
    $grupoSanguineo = $_POST["grupo_sanguineo"];
    // ... (obtener el resto de los campos del formulario)

    // Actualizar los datos del historial clínico en la base de datos
    $sql = "UPDATE historial SET alergias='$alergias', grupo_sanguineo='$grupoSanguineo' /* ... */ WHERE id='$idPaciente'";

    if ($conexion->query($sql) === TRUE) {
        echo "Historial clínico actualizado correctamente";
    } else {
        echo "Error al actualizar el historial clínico: " . $conexion->error;
    }

    $conexion->close();
}
?>
