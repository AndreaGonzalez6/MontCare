<?php
session_start();

include 'conexion_be.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
//$contrasena = hash('sha512', $contrasena);

// Verifica si el usuario y contraseña existen en la tabla "usuarios"
$consulta_usuarios = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
$resultado_usuarios = mysqli_query($conexion, $consulta_usuarios);

if (mysqli_num_rows($resultado_usuarios) > 0) {
    // El usuario existe en la tabla "usuarios"
    // Verifica si el usuario tiene un plan en la tabla "pagos"
    $consulta_pagos = "SELECT plan FROM pagos WHERE usuario = '$usuario'";
    $resultado_pagos = mysqli_query($conexion, $consulta_pagos);

    if (mysqli_num_rows($resultado_pagos) > 0) {
        // El usuario tiene un plan, obtenemos el valor del campo "plan"
        $fila_pagos = mysqli_fetch_assoc($resultado_pagos);
        $plan = $fila_pagos['plan'];

        // Redirige a la página correspondiente según el valor del plan
        if ($plan == 1) {
            $_SESSION['usuario'] = $usuario;
            header("location: ../despues_ingreso.php");
            exit;
        } elseif ($plan == 2) {
            $_SESSION['usuario'] = $usuario;
            header("location: ../despues_ingreso_2.php");
            exit;
        } elseif ($plan == 3) {
            $_SESSION['usuario'] = $usuario;
            header("location: ../despues_ingreso_2.php");
            exit;
        }
    } else {
        // El usuario no tiene un plan, redirige a una página por defecto
        $_SESSION['usuario'] = $usuario;
        header("location: ../despues_ingreso.php");
        exit;
    }
} else {
    // Usuario o contraseña no encontrados en la tabla "usuarios"
    echo '
    <script> 
    alert("Usuario o contraseña incorrectos");
    window.location = "../index.php";
    </script>';
    exit;
}
?>
