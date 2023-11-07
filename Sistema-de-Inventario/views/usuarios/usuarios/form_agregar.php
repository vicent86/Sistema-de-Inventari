<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-sm-6 offset-3 mt-5">
        <form action="../../includes/_functions.php" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre *</label>
                <input type="text"  id="nombre" name="nombre" class="form-control">
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo electronico *</label>
                        <input type="email"  id="correo" name="correo" class="form-control">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password *</label>
                        <input type="password"  id="password" name="password" class="form-control">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono *</label>
                <input type="tel"  id="telefono" name="telefono" class="form-control">
                <input type="hidden" name="accion" value="insertar_usuarios">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Guardar</button>


            </div>

        </form>
    </div>
</div>
</body>
</html>