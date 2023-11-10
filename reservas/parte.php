<?php
include ("php/conexion_be.php");


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
if(!isset($_SESSION['usuario'])){
    echo'
      <script> 
      alert("Debes iniciar sesión para acceder a esta página");
      window.location = "index.php"; 
      </script>    
    ';
    session_destroy();
    die();
  }

?>





<!DOCTYPE html>
<html>
<head>
    <title>Mi Página con Modal</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="ruta_a_bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="ruta_a_bootstrap/js/bootstrap.bundle.min.js"></script>
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>

</head>
<body>

</body>