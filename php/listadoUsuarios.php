<?php

$nombres_sesion = $_SESSION['sesion_nombre'];
$sql_usuarios = mysqli_query($conexion, "SELECT us.id as id, us.nombre_completo as nombre_completo, us.email as email FROM usuarios AS us INNER JOIN roles AS rol ON us.rol_id = rol.rol_id");
