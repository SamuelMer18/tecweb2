<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 6</title>
</head>

<body>
    <?php
    echo "<h3>1.</h3>";
    $idioma = array('español', 'ingles', 'frances');
    $palabra = $_GET['palabra'];
    switch ($palabra) {
        case "hola":
            echo "Usted Habla español";
            break;
        case "hello":
            echo "Usted Habla ingles";
            break;
        case "bonjour":
            echo "Usted Habla frances";
            break;
        default:
            echo "Ingrese una palabra";

            break;
    }
    echo "<h3>2.</h3>";
    $platos = $_GET['plato'];
    $cantidad = $_GET['cantidad'];
    $menu = [
        ["plato" => "saice", "precio" => 5],
        ["plato" => "picante", "precio" => 10],
    ];
    echo "<p>Antes</p>";
    foreach ($menu as $key => $value) {
        echo "El plato {$value['plato']} tiene un precio de: {$value['precio']} <br>";
    }
    array_unshift($menu, array("plato" => "pique", "precio" => 4));
    echo "<p>Despues</p>";
    foreach ($menu as $key => $value) {
        echo "El plato {$value['plato']} tiene un precio de: {$value['precio']} <br>";
    }
    $preciopagar = 0;
    foreach ($menu as $key => $value) {
        if ($value['plato'] == $platos) {
            $preciopagar = $value['precio'] * $cantidad;
        }
    }
    echo "<h3>El precio a pagar es: $preciopagar</h3>";
    echo "<h3>3.</h3>";
    $personas = [
        ["nombre" => "Jose", "altura" => 1.70],
        ["nombre" => "Maria", "altura" => 1.60],
        ["nombre" => "Luis", "altura" => 1.80],
        ["nombre" => "Jorge", "altura" => 1.90],
        ["nombre" => "Carlos", "altura" => 1.75],
    ];

    $alturas = array_column($personas, 'altura');
    foreach ($personas as $key => $value) {
        echo "La persona {$value['nombre']} tiene una altura de: {$value['altura']} <br>";
    }
    echo "<br>";
    foreach ($personas as $key => $value) {
        if ($value['altura'] == max($alturas)) {
            echo "La persona mas alta es: {$value['nombre']} con una altura de: {$value['altura']} <br>";
        }
        if ($value['altura'] == min($alturas)) {
            echo "La persona mas baja es: {$value['nombre']} con una altura de: {$value['altura']} <br>";
        }
    }
    ?>
</body>

</html>