<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-first-snack</title>
</head>
<body>
    

<?php
$teams1 = [
    [
        "homeTeams" => "Bologna",
        "guestTeams" => "Palermo",
        "teamsPoints" => "5",
        "guestPoints" => "2",

    ],
    [
        "homeTeams" => "Modena",
        "guestTeams" => "ReggioCalabria",
        "teamsPoints" => "7",
        "guestPoints" => "4",    
    
    ],
    [
        "homeTeams" => "Lodi",
        "guestTeams" => "Bergamo",
        "teamsPoints" => "2",
        "guestPoints" => "5",   
    ],
    ]
?>

<?php
     
     $keys = array_keys($teams1);
     for($x = 0; $x < count($keys); $x++){
        $key = $teams1[$x];
        echo $key["homeTeams"] . "--" . $key["guestTeams"] . "--" . $key["teamsPoints"] . "--" . $key["guestPoints"] . "<br>" ;
     }
       ?>

</body>