<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Busqueda por email</h1>
    <?php
    //conexion a la base
    $mail = $_REQUEST['mail'];
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Fallo en la conexion");

    $alumnos = mysqli_query(
        $conexion,
        "SELECT * FROM `alumnos` WHERE alumnos.mail = '$mail'"
    )
        or die("Problemas al recuperar datos: " . mysqli_error($conexion));


    /*Si existe registro entra en el if
    if ($alumno = mysqli_fetch_array($alumnos)) {
        echo "Nombre:" . $alumno['nombre'] . "<br>";
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
    } else {
        echo "No existe un alumno con ese mail.";
    }*/

    //Puse esto porque tenia mas de un alumno con el mismo correo, aunque esto no pasa
    $cant = 0;
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
        $cant++;
        echo "<br>";
        echo "<hr>";
    }

    if($cant == 0){
        echo "No existe registros";
    }

    mysqli_close($conexion);
    ?>
</body>

</html>