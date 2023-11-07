<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "tiendainventario";

$conexion = mysqli_connect($host, $user, $password, $database);
if (!$conexion) {
    echo "No se ha realizado la conexion a la base de datos correctamente, el error fue: ".
    mysqli_connect_error();
}

?>
