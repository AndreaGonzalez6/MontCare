<?php 

include 'conexion_be.php';

//Verificación formulario 1

//Obtener datos
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

//Validar 
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo' and contrasena='$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    // Usuario existe, realizar las acciones necesarias
    echo '<script>
    alert("Usuario encontrado exitosamente");
    setTimeout(function() {
        window.location = "http://localhost/MontCare/portaldepagos.php?formulario1Completado=true";
    }, 200); 
</script>';

    
} else {
    // Usuario no existe o las credenciales son incorrectas
    echo '
    <script>
        alert("Usuario no encontrado o credenciales incorrectas.");
        setTimeout(function() {
            window.location = "http://localhost/MontCare/portaldepagos.php?formulario1Completado=false";
        }, 200); 
    </script>
    ';
}


?>