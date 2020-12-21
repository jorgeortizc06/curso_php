<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombres[] = 'jorge';
    $nombres[] = 'andrea';
    $nombres[] = 'paty';


    /*
    for ($i = 0; $i < count($nombres); $i++) {
    echo $nombres[$i];
    echo "<br>";
  }
    */

    foreach ($nombres as $nombre){
        echo $nombre;
        echo "<br>";
    }
    
    ?>
</body>
</html>