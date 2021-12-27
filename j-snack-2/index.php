<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        // più lungo di 3 caratteri
        $goodName = strlen($name) > 3;

        // mail contiene un punto e una chiocciola
        $goodMail = strpos($mail, '@') !== false && strpos($mail, '.') !== false;

        // age sia un numero
        $goodAge = is_numeric($age);
    ?>
</head>
<body>
    <h1> Benvenuto</h1>
        <p>
            <?php
                if($goodName && $goodMail && $goodAge){
                    echo 'Accesso riuscito';
                }else{
                    echo 'Accesso negato';
                }
            ?>
        </p>
</body>
</html>