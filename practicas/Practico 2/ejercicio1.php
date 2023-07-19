<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
    $num = rand(1, 100);
    echo "Numero: " . $num . "<br>";
    if ($num <= 50) {
        echo "Es menor o igual a 50\n";
    } else {
        echo "Es mayor a 50\n";
    }
    ?>
</body>

</html>