<?php
error_reporting(0);
session_start();
$sesionactual = $_SESSION['correo'];

if($sesionactual == null || $sesionactual == '') {
    header('location: includes/_sesion/login.php');
}else {
    header('location: views/usuarios/index.php');
}
?>
