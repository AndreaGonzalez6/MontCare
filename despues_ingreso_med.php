<?php
session_start();

if (!isset($_SESSION['correo'])) {
    echo '
    <script> 
    alert("Debes iniciar sesión para acceder a esta página");
    window.location = "loginMedicos.html"; 
    </script>    
    ';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Historial Clínico</title>
    <!-- Estilos CSS aquí -->
    <style>
        /* Estilos CSS aquí */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <header>
        <h1>Bienvenido al Historial Clínico</h1>
        <!-- Aquí puedes colocar el nombre del médico o información relevante -->
    </header>

    <main>
        <section class="historial">
            <h2>Historial Clínico de Pacientes</h2>

            <?php
            // Establecer la conexión con la base de datos
            include 'php/conexion_be.php';

            $sql = "SELECT * FROM usuarios";
            $result = $conexion->query($sql);

            if ($result->num_rows > 0) {
                echo '<table>';
                echo '<tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                    </tr>';

                while ($row = $result->fetch_assoc()) {
                    echo '<tr class="paciente" data-id="' . $row['id'] . '">';
                    echo '<td>' . $row['nombre_completo'] . '</td>';
                    echo '<td>' . $row['apellidos'] . '</td>';
                    echo '<td>' . $row['fecha_nacimiento'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['telefono'] . '</td>';
                    echo '</tr>';
                }

                echo '</table>';
            } else {
                echo 'No se encontraron pacientes en el historial.';
            }

            $conexion->close();
            ?>
        </section>

        <section class="historial-clinico">
            <!-- Aquí se mostrará el historial clínico del paciente seleccionado -->
            <h1>Formulario Historial Clínico</h1>
            <form class="form-historial" action="http://localhost/MontCare/guardar_historial.php" method="post" style="display: none;">
                <label for="alergias">Alergias conocidas:</label>
                <input type="text" id="alergias" name="alergias" required><br><br>

                <label for="grupo_sanguineo">Grupo Sanguíneo:</label>
                <input type="text" id="grupo_sanguineo" name="grupo_sanguineo" required><br><br>

                <label for="antecedentes_familiares">Antecedentes Familiares:</label>
                <input type="text" id="antecedentes_familiares" name="antecedentes_familiares" required><br><br>

                <label for="cirugias_realizadas">Cirugías Realizadas:</label>
                <input type="text" id="cirugias_realizadas" name="cirugias_realizadas" required><br><br>

                <label for="enfermedades_previas">Enfermedades Previas:</label>
                <input type="text" id="enfermedades_previas" name="enfermedades_previas" required><br><br>

                <label for="medicamentos">Medicamentos Actuales y Anteriores:</label>
                <input type="text" id="medicamentos" name="medicamentos" required><br><br>

                <label for="sintomas">Síntomas Actuales:</label>
                <input type="text" id="sintomas" name="sintomas" required><br><br>

                <label for="tratamiento">Tratamiento Recomendado:</label>
                <input type="text" id="tratamiento" name="tratamiento" required><br><br>

                <label for="observaciones">Observaciones:</label>
                <input type="text" id="observaciones" name="observaciones" required><br><br>

                <label for="referencias_especialistas">Referencias a Especialistas:</label>
                <input type="text" id="referencias_especialistas" name="referencias_especialistas" required><br><br>

                <input type="submit" value="Guardar Historial Clínico">
            </form>
        </section>
    </main>

    <footer>
        <!-- Puedes agregar información adicional, enlaces o detalles del médico aquí -->
    </footer>

    <script>
        const pacientes = document.querySelectorAll('.paciente');

        pacientes.forEach(paciente => {
            paciente.addEventListener('click', () => {
                const idPaciente = paciente.dataset.id;

                const formHistorial = document.querySelector('.form-historial');
        formHistorial.style.display = 'block'; // Mostrar el formulario
            });
        });
    </script>
</body>

</html>