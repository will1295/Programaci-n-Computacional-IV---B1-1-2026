<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Soy codigo html</h1>
    <?php echo 'Hola Mundo!'; ?>

    <?php
    
        $variable = "Hola soy una variable!";
        const NUMERO = 20;
        define("VALOR",10);

        echo 'Esto es una variable '.$variable."<br>";
        echo 'Esto es una constante '.NUMERO."<br>";
        echo 'Esto tambien es una constante '.VALOR."<br>";
    
    ?>


</body>
</html>