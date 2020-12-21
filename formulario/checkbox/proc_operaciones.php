<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $num1 = $_REQUEST['valor1'];
    $num2 = $_REQUEST['valor2'];

    if(isset($_REQUEST['suma'])){
        echo "la suma es: " . ($num1+$num2) . "<br>";
    }
    if(isset($_REQUEST['resta'])){
        echo "la resta es: " . ($num1-$num2) . "<br>";
    }

?>
    
</body>
</html>