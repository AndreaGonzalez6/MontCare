<?php

$nombres_sesion = $_SESSION['sesion_nombre'];
$sql_usuarios = mysqli_query($conexion, "SELECT us.usuario_id as usuario_id, us.nombres as nombres, us.email as email, rol.rol as rol FROM usuarios AS us INNER JOIN roles AS rol ON us.rol_id = rol.rol_id");
