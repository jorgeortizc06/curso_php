<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $user = $_REQUEST['user'];
    $pass1 = $_REQUEST['pass1'];
    $pass2 = $_REQUEST['pass2'];


    function verificar_pass($pass1, $pass2){
        if ($pass1 == $pass2){
            echo "La contraseña coincide";
        }else {
            echo "No coincide las contraseñas";
        }
    }

    echo "El usuario es: " . $user;
    echo "<br>";
    verificar_pass($pass1, $pass2);
    ?>
    <h2>Se verificaron las claves ingresadas</h2>
    
</body>
</html>