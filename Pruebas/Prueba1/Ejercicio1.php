<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="width: 200px; height: 100px; background-color:white;">
        <form action="ejercicio1.php" method="get">
            <label for="mes">Ingrese un numero del mes</label>
            <input type="text" name="mes">
            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php
    if (!isset($_GET['mes']) || $_GET['mes'] == "") {
        echo '<h3 style="color:red;">Debes Ingresar el mes </h3>';
        exit;
    }

    $estaciones = array("Primavera", "Verano", "Otoño", "Invierno");

    $mes = $_GET['mes'];
    if ($mes >= 3 && $mes <= 5) {
        $estacion = $estaciones[0];
    } elseif ($mes >= 6 && $mes <= 8) {
        $estacion = $estaciones[1];
    } elseif ($mes >= 9 && $mes <= 11) {
        $estacion = $estaciones[2];
    } else {
        $estacion = $estaciones[3];
    }
    $indiceEstacion = array_search($estacion, $estaciones);
    reset($estaciones);
    while (current($estaciones) !== $estacion) {
        next($estaciones);
    }
    $siguienteEstacion = next($estaciones);
    if ($indiceEstacion == 3) {
        reset($estaciones);
        $siguienteEstacion = current($estaciones);
    }

    echo "La estación actual del mes es: " . $estacion . "<br>";
    echo "La siguiente estación es: " . $siguienteEstacion;
    ?>

</body>

</html>