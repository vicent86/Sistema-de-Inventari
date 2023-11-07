<?php

/**
 * Validamos los datos para poder iniciar la sesion
 */

require_once ("../_db.php");
$correo=$_POST['correo'];
$password=$_POST['password'];
session_start();
$_SESSION['correo']=$correo;


$conexion=mysqli_connect("localhost","root","","tiendainventario");
$consulta="SELECT*FROM user where correo='$correo' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){

    header('Location: views/usuarios/index.php');


}else{

    header('Location: index.php');
    session_destroy();
}
?>
<?php
/**
 * Registro de usuarios
 */

if (isset($_POST['registrar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['telefono']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encripta la contraseña
        $telefono = trim($_POST['telefono']);

        $consulta = "INSERT INTO user (nombre, correo, telefono, password)
        VALUES ('$nombre', '$correo', '$telefono', '$password')";

        mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
    }
}
?>
