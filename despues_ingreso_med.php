<?php
include("php/conexion_be.php");


session_start();
$usuario_sesion = "";

if (isset($_SESSION['usuario'])) {
  $usuario_sesion = $_SESSION['usuario'];
  $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario_sesion'";
  $query = $pdo->prepare($sql);
  $query->execute();
  $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

  foreach ($usuarios as $usuario) {
    $id_usuario_sesion = $usuario["id"];
    $nombre_completo_sesion = $usuario["nombre_completo"];
    $email = $usuario["email"];
  }
} else {
  // No se ha iniciado sesión
  // Puedes agregar un mensaje o redirigir al usuario si lo deseas
}

if (!isset($_SESSION['usuario'])) {
  echo '
    <script> 
    alert("Debes iniciar sesión para acceder a esta página");
    window.location = "index.php"; 
    </script>    
  ';
  session_destroy();
  die();
}

?>


<?php


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
    <link rel="stylesheet" href="css/all.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="preload" href="css/normalize.css" as="style"> <!--Para cargar la hoja de estilos más rápido -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
  <link rel="shortcut icon" href="imágenes/loguito.png" type="image/x-icon" />
  <title>Centro Hospitalario MontCare</title>
  <link rel="preload" href="css/estilos.css" as="style">
  <link rel="stylesheet" href="css/estilos.css" />
  <!-- Boxicons CSS -->
  <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
  
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
<div class="container-1">
        <aside class="sidebar">
            <!-- Contenido del sidebar -->
            <nav class="sidebar locked">
                <div class="logo_items flex">
                    <span class="nav_image">
                        <img src="imágenes/logo.png" alt="logo_img" />
                    </span>
                    <span class="logo_name">MontCare</span>
                </div>

                <div class="menu_container">
                    <div class="menu_items">
                        <ul class="menu_item">

                            <li class="item">
                                <a href="despues_ingreso.php" class="link flex">
                                    <i class="bx bx-home-alt"></i>
                                    <span>Inicio</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="des_ing_info_planes.php" class="link flex">
                                    <i class="bx bx-grid-alt"></i>
                                    <span>Planes</span>
                                </a>
                            </li>
                        </ul>

                        <ul class="menu_item">
                            <li class="item">
                                <a href="des_ingre_nosotros.php" class="link flex">
                                    <i class="bx bxs-magic-wand"></i>
                                    <span>¿Quiénes somos?</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="http://localhost/MontCare/reservar.php" class="link flex">
                                    <i class="bx bx-folder"></i>
                                    <span>Citas</span>
                                </a>
                            </li>
                        </ul>

                        <ul class="menu_item">
                            <li class="item">
                                <a href="despues_ingreso_recomendaciones.php" class="link flex">
                                    <i class="bx bx-flag"></i>
                                    <span>Recomendaciones</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="http://localhost/MontCare/reservas/mis_citas.php" class="link flex">
                                    <i class="fa-solid fa-clipboard-user user"></i>
                                    <style>
                                        .user {
                                            font-size: 22px;
                                            margin-left: 6px;
                                            padding: 15px;
                                        }
                                    </style>
                                    <span>Mis Citas</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="php/cerrar_sesion.php" class="link flex">
                                    <i class="bx bx-award"></i>
                                    <span>Cerrar Sesión</span>
                                </a>
                            </li>
                        </ul>


                        <div class="sidebar_profile flex">
                            <?php
                            if ($usuario_sesion == "") {
                                //echo "sin";
                            ?>
                                <div class="data_text">
                                    <a href="http://localhost/MontCare/" class="ms-lg-3">
                                        <p style="color: #000000"><i class="fa-solid fa-user" style="color: #000000"></i>ingresar </p>
                                    </a>
                                </div>
                            <?php
                            } else {
                                //echo "Ya";
                            }
                            ?>
                            <div class="data_text">
                                <a href="http://localhost/MontCare/" class="ms-lg-3">
                                    <p style="color: #000000"><i class="fa-solid fa-user" style="color: #000000"></i><?php echo $usuario_sesion; ?> </p>
                                </a>
                            </div>

                        </div>
                    </div>
            </nav>
        </aside>
        <main class="content">
            <!-- Contenido principal -->
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
            <style>
                .paciente:hover{
                    color: blue;
                }
            </style>
        <section class="historial-clinico">
            <!-- Aquí se mostrará el historial clínico del paciente seleccionado -->
            <form class="form-historial" action="http://localhost/MontCare/guardar_historial.php" method="post" style="display: none;">
            <h1>Formulario Historial Clínico</h1>
                
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
        const formHistorial = document.querySelector('.form-historial');
        const idUsuarioInput = document.createElement('input');
        idUsuarioInput.type = 'hidden';
        idUsuarioInput.name = 'id_usuario'; // Nombre del campo para enviar al formulario PHP
        formHistorial.appendChild(idUsuarioInput);

        pacientes.forEach(paciente => {
            paciente.addEventListener('click', () => {
                const idPaciente = paciente.dataset.id;

                // Actualizar el valor del campo oculto con el id del usuario seleccionado
                idUsuarioInput.value = idPaciente;

                formHistorial.style.display = 'block'; // Mostrar el formulario
            });
        });
    </script>
        </main>
    </div>
    
</body>

</html>