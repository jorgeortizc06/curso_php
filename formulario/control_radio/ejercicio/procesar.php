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
        echo "El nombre de la persona es " . $nombre . "<br>";

        if($_REQUEST['r1'] == 1){
            echo "No tiene estudios esta persona";
        }elseif ($_REQUEST['r1'] == 2){
            echo "tiene estudios primarios";
        }else{
            echo "tiene estudios secundarios";
        }
    ?>
    
</body>
</html>