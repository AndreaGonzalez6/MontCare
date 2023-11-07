<?php 

include 'conexion_be.php';


$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
//$contrasena = hash('sha512', $contrasena);


$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo' and contrasena='$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    echo '<script>
    alert("Usuario encontrado exitosamente");
    setTimeout(function() {
        window.location = "http://localhost/MontCare/portaldepagos2.php?formulario1Completado=true";
    }, 200); 
</script>';


    
} else {
    echo '
    <script>
        alert("Usuario no encontrado o credenciales incorrectas.");
        setTimeout(function() {
            window.location = "http://localhost/MontCare/portaldepagos2.php?formulario1Completado=false";
        }, 200); 
    </script>
    ';
}


?>