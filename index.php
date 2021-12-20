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
    <title>php-badwords</title>
</head>
<body>
    

<?php
$teamsArray = [
    [
        homeTeams => "Bologna",
        guestTeams => "Palermo",
        teamsPoints => "5",
        guestPoints => "2",

    ],
    [
        homeTeams => "Modena",
        guestTeams => "ReggioCalabria",
        teamsPoints => "7",
        guestPoints => "4",    
    [
      
    ],
    [
        homeTeams => "Lodi",
        guestTeams => "Bergamo",
        teamsPoints => "2",
        guestPoints => "5",   
    ]
    ];
    ?>

    <?php
       echo $teamsArray
       ?>
</body>