<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $nombre = $_REQUEST['nombre'];
    $dirección = $_REQUEST['direccion'];

    //creamos el archivo
    $archivo = fopen("pedidos.txt", "a") or die("Error");
    fputs($archivo, $nombre);
    fputs($archivo, "\n");
    fputs($archivo, $dirección);
    fputs($archivo, "\n");
    fputs($archivo, "*************");
    fputs($archivo, "\n");

    if (isset($_REQUEST['jamon_queso'])){
        fputs($archivo, "Pizza jamon con queso");
        fputs($archivo, "\n");
        fputs($archivo, "Cantidad: " . $_REQUEST['can_jamon_queso']);
        fputs($archivo, "\n");
        fputs($archivo, "*************");
        fputs($archivo, "\n");
    }

    if (isset($_REQUEST['napolitana'])){
        fputs($archivo, "Pizza jamon con queso");
        fputs($archivo, "\n");
        fputs($archivo, "Cantidad: " . $_REQUEST['can_napolitana']);
        fputs($archivo, "\n");
        fputs($archivo, "*************");
        fputs($archivo, "\n");
    }

    if (isset($_REQUEST['muzzarella'])){
        fputs($archivo, "Pizza jamon con queso");
        fputs($archivo, "\n");
        fputs($archivo, "Cantidad: " . $_REQUEST['can_muzzarella']);
        fputs($archivo, "\n");
        fputs($archivo, "*************");
        fputs($archivo, "\n");
    }

    fputs($archivo, "===================================");
    fputs($archivo, "\n");

    fclose($archivo);

    echo "Datos cargados correctamente";


?>
    
</body>
</html>