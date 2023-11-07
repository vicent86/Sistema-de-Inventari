<?php

require_once ("_db.php");

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
        case 'eliminar_producto':
            eliminar_producto();
        break;
        case 'editar_producto':
            editar_producto();
        break;
        case 'insertar_productos':
            insertar_productos();
        break;
    }
}

function insertar_productos() {
    global $conexion;
    extract($_POST);

        //variables que almacenan los valores de nuestra imagen
            $tamanyArxiu=$_FILES['foto']['size'];

        // lectura de la imagen
            $imagenUpload = fopen($_FILES['foto']['tmp_name'], 'r');
            $binarioImagen = fread($imagenUpload,$tamanyArxiu);

        // realizamos la consulta correspondiente para guardar los datos
            $finImagen = mysqli_escape_string($conexion, $binarioImagen);

    $consulta= "INSER INTO productos (nombre, descripcion, color, precio, cantidad, cantidad_minima, categorias, imagen)
    VALUES ('$nombre', '$descripcion', '$color', $precio, $cantidad ,$cantidad_minima, '$categorias', '$imagenFin');";

    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");
}

function editar_producto() {
    global $conexion;
    extract($_POST);

    //variables que almacenan los valores de nuestra imagen
    $tamanyArxiu=$_FILES['foto']['size'];

    // lectura de la imagen
    $imagenUpload = fopen($_FILES['foto']['tmp_name'], 'r');
    $binarioImagen = fread($imagenUpload,$tamanyArxiu);

    // realizamos la consulta correspondiente para guardar los datos
    $finImagen = mysqli_escape_string($conexion, $binarioImagen);

    $consulta= "UPDATE productos SET nombre = $nombre, descripcion = '$descripcion', color = '$color', precio = '$precio', cantidad = '$cantidad', categorias = '$categorias', imagen = '$imagenFin' WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");
}

function eliminar_producto() {
    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM productos WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Lccation: ../views/usuarios/");
}
?>