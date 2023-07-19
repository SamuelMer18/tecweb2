<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h2>Ejercicio 5</h2>";
    if (isset($_GET['pies']) && isset($_GET['metros'])) {
        $pies = $_GET['pies'];
        $metros = $_GET['metros'];
        $piesMetros = $pies * 0.3048;
        $suma = $piesMetros + $metros;
        echo "Pies: " . $pies = $suma * 3.28084 . "<br>";
        echo "Yardas: " . $yardas = $suma * 1.09361 . "<br>";
        echo "Pulgadas: " . $pulgadas = $suma * 39.3701 . "<br>";
        echo "Milla: " . $milla = $suma * 0.000621371 . "<br>";
    } else {
        echo '<h3 style="color:red";>Debes Ingresar todos los datos</h3>';
    }
    ?>
    <div style="width: 200px; height: 100px; background-color:white;">
        <form action="ejercicio5.php" method="get">
            <label for="pies">Pies</label>
            <input type="number" name="pies">
            <label for="metros">Metros</label>
            <input type="number" name="metros">
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>