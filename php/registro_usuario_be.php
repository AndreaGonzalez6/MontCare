<?php 

include 'conexion_be.php';


$tipo_documento = $_POST['format'];
$numero_documento = $_POST['numero_documento'];
$nombre_completo = $_POST['nombre_completo'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$confirm_contrasena = $_POST['confirm_contrasena'];


$query = "INSERT INTO usuarios(tipo_id, num_id, nombre_completo, apellidos, fecha_nacimiento, email, telefono, usuario, contrasena, confirm_contra) 
VALUES('$tipo_documento', '$numero_documento', '$nombre_completo', '$apellidos', '$fecha_nacimiento', '$correo', '$telefono', '$usuario', '$contrasena', '$confirm_contrasena')";


//Verificar que el correo no se repita
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
       <script> 
          alert("Este correo ya está registrado, intente con otro diferente");
          window.location = "../index.php";
       </script>
    ';
    exit();
}

//Verificar que el usuario no se repita
/*$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
       <script> 
          alert("Este correo usuario ya está registrado, intente con otro diferente");
          window.location = "../index.php";
       </script>
    ';
    exit();
}*/

//Verificar que el número de documento no se repita
/*$verificar_documento = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_documento) > 0){
    echo '
       <script> 
          alert("Este correo usuario ya está registrado, intente con otro diferente");
          window.location = "../index.php";
       </script>
    ';
    exit();
}*/


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
        alert("Usuario registrado exitosamente");
        window.location = "../index.php";
        </script>
    ';
}else{
    echo '
        <script>
        alert("Lo sentimos, no se completó el registro exitosamente");
        window.location = "../index.php";
        </script>
    ';
}

mysqli_close($conexion);

?>

