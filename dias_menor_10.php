<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
        $dia = date("d");
        /*
        La condición del if debe ir obligatoriamente entre paréntesis. Los operadores relacionales disponibles son:
        > Mayor
        >= Mayor o igual
        < Menor
        <= Menor o igual
        == Igual
        != Distinto
        */
        if ($dia <= 20) {
            echo "sitio activo";
        } else {
            echo "sitio fuera de servicio";
        }
        echo "<br>";
        echo date("d/m/Y") . "<br>";
        echo "Numeros Aleatorios";
        echo "<br>";
        $numero_aleatorio = rand(1,100); //aleatorio entre 1 y 100
        if ($numero_aleatorio <= 50){
            echo $numero_aleatorio . "<br>";
            echo "soy menor a 50";
        }else{
            echo $numero_aleatorio . "<br>";
            echo "soy mayor a 50";
        }

    
    ?>

</body>
</html>