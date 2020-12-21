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
    $comentarios = $_REQUEST['comentarios']; //el indice esta en html en name="edad"

    //creamos el archivo: "a" (lo crea o si ya existe el archivo lo abre para 
    //añadir datos al final), "w" (crea el archivo de texto, si existe borra 
    //su contenido) y la última forma de apertura del archivo es "r" (abre el 
    //archivo para su lectura)
    //el archivo se crea en el servidor
    $archivo = fopen("datos.txt", "a") or die("Problemas en la creación");
    //grabamos datos con fputs
    fputs($archivo, $nombre);
    //salto de line
    fputs($archivo, "\n");
    fputs($archivo, $comentarios);
    fputs($archivo, "\n");
    fputs($archivo, "--------------------------------------------------------");
    fputs($archivo, "\n");
    //cierro el archivo
    fclose($archivo);
    echo "Los datos se cargaron correctamente";
    ?>
</body>

</html>