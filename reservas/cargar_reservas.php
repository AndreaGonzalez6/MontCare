<?php


include ("../citas-medicas/includes/db.php");



$sql = "SELECT title,start,end,color FROM reservas";

$query = $pdo->prepare($sql);
$query->execute();

$resultado = $query->fetchAll(PDO::FETCH_ASSOC);
//print_r($resultado);

echo json_encode($resultado);