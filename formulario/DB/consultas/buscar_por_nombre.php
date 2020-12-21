<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Busqueda por nombre</h1>
    <?php
    //conexion a la base
    $nombre = $_REQUEST['nombre'];
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Fallo en la conexion");

    $alumnos = mysqli_query(
        $conexion,
        "SELECT * FROM `alumnos` WHERE alumnos.nombre = '$nombre'"
    )
        or die("Problemas al recuperar datos: " . mysqli_error($conexion));

    //Puse esto porque tenia mas de un alumno con el mismo correo, aunque esto no pasa
    while ($alumno = mysqli_fetch_array($alumnos)) {
        echo "Codigo:" . $alumno['codigo'] . "<br>";
        echo "Nombre:" . $alumno['nombre'] . "<br>";
        echo "Mail:" . $alumno['mail'] . "<br>";
        echo "Curso:";
        switch ($alumno['codigocurso']) {
            case 1:
                echo "PHP";
                break;
            case 2:
                echo "ASP";
                break;
            case 3:
                echo "JSP";
                break;
        }
        echo "<br>";
        echo "<hr>";
    }

    mysqli_close($conexion);
    ?>
</body>

</html>