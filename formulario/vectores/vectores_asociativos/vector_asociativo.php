<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
    Tambien puedes usar
    $clave['ana'] = "abc123";
    $clave['luis'] = "z67yui";
    $clave['carlos'] = "sdf3sdf";
    $clave['laura'] = "dsf3k32";
    $clave['pedro'] = "axldds23";

    echo "La clave de luis es:" . $clave['luis'];
    */
    $personas = array(
        'codigo' => 100,
        'nombre' => 'Jorge Ortiz',
        'email' => 'jorgeortizc05@gmail.com'
    );

    foreach ($personas as $clave => $valor) {
        echo "Clave: " . $clave . " valor: " . $valor;
        echo "<br>";
    }

    //para el formulario
    echo "Para el formulario";
    echo "<br>";
    foreach ($_REQUEST as $clave => $valor) {
        echo "Clave: " . $clave . " valor: " . $valor;
        echo "<br>";
    }
    ?>
</body>

</html>