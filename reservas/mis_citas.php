<?php
include("../php/conexion_be.php");


session_start();
$usuario_sesion = "";

if (isset($_SESSION['usuario'])) {
    $usuario_sesion = $_SESSION['usuario'];
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario_sesion'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($usuarios as $usuario) {
        $id = $usuario["id"];
        $nombre_completo = $usuario["nombre_completo"];
        $email = $usuario["email"];
    }
} else {
    // No se ha iniciado sesión
    // Puedes agregar un mensaje o redirigir al usuario si lo deseas
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="ruta_a_bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="ruta_a_bootstrap/js/bootstrap.bundle.min.js"></script>
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>

    <script src="../citas-medicas/js/jquery.min.js"></script>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../citas-medicas/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



</head>


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link rel="stylesheet" href="../css/all.css" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="preload" href="../css/normalize.css" as="style"> <!--Para cargar la hoja de estilos más rápido -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="shortcut icon" href="imágenes/loguito.png" type="image/x-icon" />
    <title>Centro Hospitalario MontCare</title>
    <link rel="preload" href="../css/estilos.css" as="style">
    <link rel="stylesheet" href="../css/estilos.css" />
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />

</head>
<div class="container-1">
    <aside class="sidebar">
        <!-- Contenido del sidebar -->
        <nav class="sidebar locked">
            <div class="logo_items flex">
                <span class="nav_image">
                    <img src="../imágenes/logo.png" alt="logo_img" />
                </span>
                <span class="logo_name">MontCare</span>
            </div>

            <div class="menu_container">
                <div class="menu_items">
                    <ul class="menu_item">

                        <li class="item">
                            <a href="../despues_ingreso.php" class="link flex">
                                <i class="bx bx-home-alt"></i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="../des_ing_info_planes.php" class="link flex">
                                <i class="bx bx-grid-alt"></i>
                                <span>Planes</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="menu_item">
                        <li class="item">
                            <a href="../des_ingre_nosotros.php" class="link flex">
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
                            <a href="../despues_ingreso_recomendaciones.php" class="link flex">
                                <i class="bx bx-flag"></i>
                                <span>Recomendaciones</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="link flex">
                            <i class="fa-solid fa-clipboard-user"></i>
                                <span>Mis Citas</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="../php/cerrar_sesion.php" class="link flex">
                                <i class="bx bx-award"></i>
                                <span>Cerrar Sesión</span>
                            </a>
                        </li>
                    </ul>
                </div>

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

        <body id="page-top">

            <!-- Begin Page Content -->
            <div class="container-fluid">


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Lista de Citas</h6>




                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        
                                        <th>Usuario</th>
                                        <th>Email</th>
                                        <th>Cita</th>
                                        <th>Nombre del medico</th>
                                        <th>Tipo de especialista</th>
                                        <th>Fecha de la cita</th>
                                        <th>Hora de la cita</th>
                                        
                                        <th>Acción</th>
                                    </tr>
                                </thead>




                                <?php

                                include "../php/conexion_be.php";


                                $usuario_sesion = $_SESSION['usuario'];

                                // Obtener el ID del usuario actual
                                $sql_usuario = "SELECT id FROM usuarios WHERE usuario = '$usuario_sesion'";
                                $query_usuario = $pdo->prepare($sql_usuario);
                                $query_usuario->execute();
                                $usuario = $query_usuario->fetch(PDO::FETCH_ASSOC);
                                $id_usuario = $usuario['id'];

                                $result = mysqli_query($conexion, "SELECT *, usu.nombre_completo as nombre_completo, usu.email as email, doc.nombres as nombres FROM reservas as res INNER JOIN usuarios as usu ON usu.id = res.id_usuario INNER JOIN doctor as doc ON doc.id = res.nombre_medico WHERE res.id_usuario = $id_usuario");

                                while ($reservas = mysqli_fetch_assoc($result)) :
                                ?>
                                    <tr>
                                        
                                        <td><?php echo $reservas['nombre_completo']; ?></td>
                                        <td><?php echo $reservas['email']; ?></td>
                                        <td><?php echo $reservas['cita']; ?></td>
                                        <td><?php echo $reservas['nombres']; ?></td>
                                        <td><?php echo $reservas['tipo_especialista']; ?></td>
                                        <td><?php echo $reservas['fecha_cita']; ?></td>
                                        <td><?php echo $reservas['hora_cita']; ?></td>
                                        

                                        <td>
                                            <a href="eliminar_miCita.php?id_reserva=<?php echo $reservas['id_reserva'] ?> " class="btn btn-danger btn-del">
                                                <i class="fa fa-trash "></i></a></button>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>


                                </tbody>
                            </table>


                            <script>
                                $('.btn-del').on('click', function(e) {
                                    e.preventDefault();
                                    const href = $(this).attr('href')

                                    Swal.fire({
                                        title: '¿Estás seguro de eliminar esta cita?',
                                        text: '¡No podrás revertir esto!',
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Sí, eliminar',
                                        cancelButtonText: 'Cancelar',
                                    }).then((result) => {
                                        if (result.value) {
                                            if (result.isConfirmed) {
                                                Swal.fire(
                                                    'Eliminado',
                                                    'El usuario fue eliminado',
                                                    'success'
                                                );

                                                // Delay the redirection after showing the success message
                                                setTimeout(function() {
                                                    document.location.href = href;
                                                }, 5000); // Set the delay time (in milliseconds)
                                            }
                                        }
                                    });
                                });
                            </script>


                            <script src="../citas-medicas/package/dist/sweetalert2.all.js"></script>
                            <script src="../citas-medicas/package/dist/sweetalert2.all.min.js"></script>

                            <script src="../citas-medicas/package/jquery-3.6.0.min.js"></script>
                            <style>
                                .card {
                                    border-radius: 1%;
                                    border: white;
                                    margin-top: 100px;
                                }
                            </style>


                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->




</body>

</main>
</div>



</html>