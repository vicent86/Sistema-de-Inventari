<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="alert alert-danger text-center">
                <p>¿Desea confirmar la eliminacion del registro?</p>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <form action="../../includes/_functions.php" method="POST">
                        <input type="hidden" name="accion" value="eliminar_producto">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                        <input type="submit" name="" value="eliminar" class="btn btn-success">
                        <a href="./" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
</body>
</html>
