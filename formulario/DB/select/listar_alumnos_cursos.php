<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Alumnos</h1>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Error en la conexion");
    $alumnos = mysqli_query(
        $conexion,
        "SELECT `codigo`, `nombre`, `mail`, `codigocurso` FROM `alumnos`"
    )
        or die("Problemas en el select:" . $mysqli_error());

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
    <h1>CURSOS</h1>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Error en la conexion");
    $cursos = mysqli_query(
        $conexion,
        "SELECT `codigo`, `nombrecurso` FROM `cursos`"
    )
        or die("Problemas en el select:" . mysqli_error($conexion));

    while ($curso = mysqli_fetch_array($cursos)) {
        echo "Codigo:" . $curso['codigo'] . "<br>";
        echo "Nombre:" . $curso['nombrecurso'] . "<br>";
        echo "<br>";
        echo "<hr>";
    }

    mysqli_close($conexion);

    ?>


</body>

</html>