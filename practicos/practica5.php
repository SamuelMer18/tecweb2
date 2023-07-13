<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<p>Ejercicio 1</p>";
    for ($i = 1; $i <= 6; $i++) {


        if ($i < 6) {
            echo "$i,";
        } else {
            echo "$i";
        }
    }
    echo "<br>";
    for ($i = 1; $i <= 6; $i++) {

        $doble = $i * 2;
        if ($i < 6) {
            echo "$doble,";
        } else {
            echo "$doble";
        }
    }
    echo "<p>Ejercicio 2</p>";
    for ($i = 1; $i <= 100; $i++) {
        echo $i;
        if ($i % 10 == 0) {
            echo "<br>";
        }
    }
    echo "<p>Ejercicio 3</p>";
    $n = rand(1, 10);

    for ($i = 1; $i <= $n; $i++) {
        $base = rand(1, 10);
        $altura = rand(1, 10);
        $area = ($base * $altura) / 2;
        echo "Triángulo $i: Base = $base, Altura = $altura, Área = $area <br/>";
    }


    ?>
</body>

</html>