<?php 

include 'conexion_be.php';

//Registro Formulario 
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$tipo_documento = $_POST['format'];
$numero_documento = $_POST['numerodoc'];

$query = "INSERT INTO pagos(usuario, nombre, tipo_id, num_id,  plan) 
VALUES('$usuario', '$nombre', '$tipo_documento', '$numero_documento', 1)";

$ejecutar = mysqli_query($conexion, $query);


if($ejecutar){
    echo '
        <script>
        alert("Su pago se ha realizado de manera exitosa");
        window.location = "../index.php"
        </script>
    ';
}else{
    echo '
        <script>
        alert("Lo sentimos, no se completó el pago exitosamente");
        window.location = "http://localhost/MontCare/portaldepagos"
        </script>
    ';
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>