<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>j-snack-5</title>
</head>
<body>
    <?php
    $arr = [];
    while(count($arr) < 15){
        $rnd = rand(0, 20);
        if(!in_array($rnd,$arr)){
            $arr [] = $rnd ;
        }
    }
    ?>
</body>
</html>