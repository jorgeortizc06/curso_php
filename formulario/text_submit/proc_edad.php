<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = $_REQUEST['nombre']; //mediante el vector request acceso al indice nombre
        $edad = $_REQUEST['edad']; //el indice esta en html en name="edad"
        echo "El nombre ingresado es: ";
        echo  $nombre . " y su edad es: " . $edad; //Es común indicar entre comillas simples el subíndice en lugar de comillas dobles (con comillas dobles también funciona)
        echo "<br>";
        if ($edad > 18) {
            echo "es mayor de edad";
        } else {
            echo "es menor de edad";
        }
    ?>
</body>
</html>