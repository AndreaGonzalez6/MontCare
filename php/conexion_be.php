<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "medicina";


$servidor = "mysql:dbname=".$database.";host=".$host;

try{
    $pdo = new PDO($servidor,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "conexión exitosa con la base de datos";
}catch (PDOException $e){
   // print_r($e);
    echo "error no se pudo conectar a la base de datos";
}


$conexion = mysqli_connect($host, $user, $password, $database);
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;


}

$fechaHora = date("Y-m-d H:i:s");
