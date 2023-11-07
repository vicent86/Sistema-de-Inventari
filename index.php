<?php
error_reporting(0);
session_start();
$sesionactual = $_SESSION['correo'];

if($sesionactual == null || $sesionactual == '') {
    header('Location: includes/_session/login.php');
}else {
    header('Location: views/usuarios/index.php');
}
?>
