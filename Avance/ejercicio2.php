<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    echo "<h1>Ejercicio 3<h1>"
    ?>
</head>

<body>
    <?php
    $tja = 2200;
    $cercado = 4000;
    $avilez = 14000;
    $ciudad = $tja;
    print "<p>La poblacion de estudiantes en ciudad es: {$ciudad}</p>";
    $ciudad = $cercado;
    print "<p>La poblacion de estudiantes en ciudad es: {$ciudad}</p>";
    $ciudad = $avilez;
    print "<p>La poblacion de estudiantes en ciudad es: {$ciudad}</p>";
    //definiendo una constante
    define("TipoCambio", 6.97);
    $deuda = 1200;
    print "tu deuda en dolares es " . ($deuda * TipoCambio);

    ?>
</body>

</html>