<!-- snack 1  -->
<!-- Creo un array di elementi -->
<!-- Dentro l'oggetto inserisco una squadra una squadra di casa e una ospite -->
<!-- punti fatti dalla squadra di casa e punti fatti dalla squadra ospite  Olimpia Milano - Cantù | 55-60 -->
<!-- stampo -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-first-snack</title>
</head>
<body>
    

<?php
    $numArray = [];
    for($x = 0; count($numArray); $x++){
        $random = rand(1,100);
        if (!in_array($random, $numArray)){
            $numArray[] = $random;
        }
    }
        var_dump($numArray);
?>
</body>
</html>
