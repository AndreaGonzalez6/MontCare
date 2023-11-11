<?php
// Seguridad de sesiones
session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

if ($varsesion == null || $varsesion = '') {

    header("Location: ../includes/_sesion/login.php");
    die();
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

    <script src="../js/jquery.min.js"></script>

</head>
<?php include "../includes/header.php"; ?>



<body id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista de Citas</h6>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#citas">
                    <span class="glyphicon glyphicon-plus"></span> Agregar cita <i class="fa fa-plus-circle" aria-hidden="true"></i> </a></button>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id_reserva#</th>
                                <th>id_usuario</th>
                                <th>nombre_medico</th>
                                <th>tipo_especialista</th>
                                <th>fecha_cita</th>
                                <th>hora_cita</th>
                                <th>titulo</th>
                                <th>fyh_creación</th>
                                <th>fyh_actualizacion</th>
                                <th>Acciones..</th>
                            </tr>
                        </thead>

                        <?php

                        include "../../php/conexion_be.php";
                        $result = mysqli_query($conexion, "SELECT * FROM reservas ");
                        while ($fila = mysqli_fetch_assoc($result)) :

                        ?>
                            <tr>
                                <td><?php echo $fila['id_reserva']; ?></td>
                                <td><?php echo $fila['id_usuario']; ?></td>
                                <td><?php echo $fila['nombre_medico']; ?></td>
                                <td><?php echo $fila['tipo_especialista']; ?></td>
                                <td><?php echo $fila['fecha_cita']; ?></td>
                                <td><?php echo $fila['hora_cita']; ?></td>
                                <td><?php echo $fila['title']; ?></td>
                                <td><?php echo $fila['fyh_creacion']; ?></td>
                                <td><?php echo $fila['fyh_actualizacion']; ?></td>

                                <td>
                                    <a class="btn btn-warning" href="../includes/editar_cita.php?id=<?php echo $fila['id'] ?> ">
                                        <i class="fa fa-edit "></i> </a>
                                    <a href="../includes/eliminar_cita.php?id=<?php echo $fila['id'] ?> " class="btn btn-danger btn-del">
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
                                title: 'Estas seguro de eliminar esta cita?',
                                text: "¡No podrás revertir esto!!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Si, eliminar!',
                                cancelButtonText: 'Cancelar!',
                            }).then((result) => {
                                if (result.value) {
                                    if (result.isConfirmed) {
                                        Swal.fire(
                                            'Eliminado!',
                                            'El usuario fue eliminado.',
                                            'success'
                                        )
                                    }

                                    document.location.href = href;
                                }
                            })

                        })
                    </script>
                    <script src="../package/dist/sweetalert2.all.js"></script>
                    <script src="../package/dist/sweetalert2.all.min.js"></script>
                    <script src="../package/jquery-3.6.0.min.js"></script>



                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/form_cita.php"; ?>

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->




</body>

</html>