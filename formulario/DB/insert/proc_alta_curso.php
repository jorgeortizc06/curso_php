<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nombre_curso = $_REQUEST['nombre'];
    //conexion a la base de datos mysql
    $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexion");
    mysqli_query($conexion, 
    "insert into cursos(nombrecurso) values 
    ('$nombre_curso')") //si nos damos cuenta, dentro del vector asociativo _REQUEST no esta doble comillas
    //dentro de un string no va comillas simples
    or die("Problemas en el select" . mysqli_error($conexion));
    //Cierro la conexion
    mysqli_close($conexion);

    echo "EL curso fue dado de alta";

    ?>
</body>

</html>