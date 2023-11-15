<?php
// Verificar si se han recibido datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos (ajusta estos valores según tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "medicina";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Recibir los datos del formulario

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir los datos del formulario
        $id_usuario = $_POST["id_usuario"];
        $alergias = $_POST["alergias"];
        $grupo_sanguineo = $_POST["grupo_sanguineo"];
        $antecedentes_familiares = $_POST["antecedentes_familiares"];
        $cirugias_realizadas = $_POST["cirugias_realizadas"];
        $enfermedades_previas = $_POST["enfermedades_previas"];
        $medicamentos = $_POST["medicamentos"];
        $sintomas = $_POST["sintomas"];
        $tratamiento = $_POST["tratamiento"];
        $observaciones = $_POST["observaciones"];
        $referencias_especialistas = $_POST["referencias_especialistas"];

        // Resto del código para la inserción en la base de datos
        // ...
    }
    // ... (obtener los valores de los demás campos de manera similar)

    // Preparar la consulta SQL para insertar los datos en la tabla historial
    $sql = "INSERT INTO historial (id_usuario, alergias, grupo_sanguineo, antecedentes_familiares, cirugias_realizadas, enfermedades_previas, medicamentos, sintomas, tratamiento, observaciones, referencias_especialistas) 
    VALUES ('$id_usuario', '$alergias', '$grupo_sanguineo', '$antecedentes_familiares', '$cirugias_realizadas', '$enfermedades_previas', '$medicamentos', '$sintomas', '$tratamiento', '$observaciones', '$referencias_especialistas')";




    if ($conn->query($sql) === TRUE) {
        echo ' <script>
        alert("El historial clínico se ha guardado correctamente");
        window.location = "despues_ingreso_med.php"
        </script>';
        

    } else {
        echo "Error al guardar el historial clínico: " . $conn->error;
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
