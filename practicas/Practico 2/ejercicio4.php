<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h2>Ejercicio 4</h2>";
    if (isset($_GET['min1']) && isset($_GET['seg1']) && isset($_GET['min2']) && isset($_GET['seg2'])) {
        $min1 = $_GET['min1'];
        $seg1 = $_GET['seg1'];
        $min2 = $_GET['min2'];
        $seg2 = $_GET['seg2'];
        $totalSeg1 = $min1 * 60 + $seg1;
        $totalSeg2 = $min2 * 60 + $seg2;
        $totalSg = $totalSeg1 + $totalSeg2;

        $horas = floor($totalSg / 3600);
        $minutos = floor(($totalSg % 3600) / 60);
        $segundos = $totalSg % 60;

        echo 'EL Atleta 1: ' . $min1 . ':' . $seg1 . ' <br>EL Atleta 2: ' . $min2 . ':' . $seg2 . " <br>";
        echo "Tiempo total: $horas horas, $minutos minutos y $segundos segundos";
    } else {
        echo '<h3 style="color:red";>Debes Ingresar todos los datos</h3>';
    }
    ?>
    <div style="width: 200px; height: 100px; background-color:white;">
        <form action="ejercicio4.php" method="get">
            <h3>Atleta 1</h3>
            <label for="min1">Minutos</label>
            <input type="number" name="min1">
            <label for="seg1">Segundos</label>
            <input type="number" name="seg1">
            <h3>Atleta2</h3>
            <label for="min2">Minutos</label>
            <input type="number" name="min2">
            <label for="sec2">Segundos</label>
            <input type="number" name="seg2">
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>