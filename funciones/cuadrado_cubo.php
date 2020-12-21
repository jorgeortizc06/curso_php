<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function cuadradocubo($valor, &$cuad, &$cub)
    {
        $cuad = $valor * $valor;
        $cub = $valor * $valor * $valor;
    }
    cuadradocubo(2, $c1, $c2);
    echo "El cuadrado de 2 es:" . $c1 . "<br>";
    echo "El cubo de 2 es:" . $c2;
    ?>
</body>

</html>