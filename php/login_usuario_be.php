<?php

session_start();

include 'conexion_be.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $usuario;
    header("location: ../bienvenida.php");
    exit;
}else{
    echo '
    <script> 
    alert("Usuario o contraseña no encontrados");
    window.location = "../index.php";
    </script>';
    exit;
}
?>
