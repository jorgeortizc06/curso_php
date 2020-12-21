<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //conexion a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    //busco si hay datos
    $registros = mysqli_query($conexion, "select codigo from alumnos
                        where mail='$_REQUEST[mail]'") or
        die("Problemas en el select:" . mysqli_error($conexion));

    //si hay registro entro
    if ($reg = mysqli_fetch_array($registros)) {
        //proceso a borrar con el parametro mail, si hay muchos registros, se eliminar todos porque cumple la condicion en where
        mysqli_query($conexion, "delete from alumnos where mail='$_REQUEST[mail]'") or
            die("Problemas en el select:" . mysqli_error($conexion));
        echo "Se efectuó el borrado del alumno con dicho mail.";
    } else {
        echo "No existe un alumno con ese mail.";
    }
    mysqli_close($conexion);
    ?>
</body>

</html>