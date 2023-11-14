<?php
session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
//$contrasena = hash('sha512', $contrasena);

// Verifica si el correo y contraseña existen en la tabla "usuarios"
$consulta_usuarios = "SELECT * FROM doctor WHERE correo = '$correo' AND contrasena = '$contrasena'";
$resultado_usuarios = mysqli_query($conexion, $consulta_usuarios);

    if (mysqli_num_rows($resultado_usuarios) > 0) {
        $_SESSION['correo'] = $correo;
        header("location: ../despues_ingreso_med.php");
        exit;
} else {
    // Usuario o contraseña no encontrados en la tabla "usuarios"
    echo '
    <script> 
    alert("Correo o contraseña incorrectos");
    window.location = "../loginMedicos.html";
    </script>';
    exit;
}
?>
