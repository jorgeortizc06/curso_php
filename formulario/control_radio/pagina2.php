<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = $_REQUEST['num1'];
        $num2 = $_REQUEST['num2'];

        if ($_REQUEST['r1'] == "suma"){
            echo "La suma es: " . ($num1+$num2);
        }else{
            if ($_REQUEST['r1'] == "resta"){
                echo "La resta es: " . ($num1 - $num2);
            }
        }

    ?>
</body>
</html>