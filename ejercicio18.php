<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h3>Recursividad con Yield en Funcion</h3>";

    function ge()
    {
        yield 1;
        yield 2;
        yield from ge2();
    }
    function ge2()
    {
        yield 3;
        yield 4;
    }
    foreach (ge() as $value) {
        print $value;
    }

    echo "<h3>Ejemplo recursividad con yield</h3>";
    function edades($ini, $fin)
    {
        for ($i = $ini; $i <= $fin; $i++) {
            $edad = rand(1, 20);
            yield "edad persona $i: " . $edad;
            yield from carrera1(($edad >= 18));
        }
    }
    function carrera1($val)
    {
        if ($val) {
            $carreras = ["Derecho", "Sistemas", "Industrial", "Redes"];
            $carrand = rand(0, 3);
            yield "Carrera: " . $carreras[$carrand];
        }
    }
    foreach (edades(1, 5) as $value) {
        print $value;
        echo "<br>";
    }
    ?>

</body>

</html>