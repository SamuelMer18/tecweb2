<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 4</title>
</head>

<body>
    <?php
    echo "<h1>1. Dado una variable que recibe temperatura<h1>";
    $temperatura = $_GET["temperatura"];
    if ($temperatura > 40) {
        echo "Hace calor";
    } elseif ($temperatura > 20) {
        echo "Templado";
    } elseif ($temperatura > 10) {
        echo "Fresco";
    } else {
        echo "Frío";
    }
    echo "<br>";
    echo "<h1>2. Determinar el tipo de rueda de un camión<h1>";
    $grosor = $_GET["grosor"];
    define("diametro", 1.4);
    $rueda = round(diametro * $grosor, 2);
    switch ($rueda) {
        case 0.33:
            echo "Camión";
            break;
        case 0.25:
            echo "Camioneta";
            break;
        case 0.20:
            echo "Vagoneta";
            break;
        case 0.15:
            echo "Moto";
            break;
        default:
            echo "Tipo de rueda desconocido";
            break;
    }

    echo " <br> El grosor de la rueda es: " . $rueda . "";
    ?>
</body>

</html>