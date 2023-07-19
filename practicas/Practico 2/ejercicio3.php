<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h2>Ejercicio 3</h2>";
    if (isset($_GET['hex'])) {
        $hex = $_GET['hex'];
        if (strlen($hex) == 6) {
            echo '<body style="background-color:#' . $hex . ';">';
        } else {
            echo '<h3 style="color:red";>Debes Ingresar una cadena con 6 digitos</h3>';
        }
    } else {
        $hex = 'white';
    }
    ?>
    <div style="width: 200px; height: 100px; background-color:white;">
        <form action="ejercicio3.php" method="get">
            <label for="hex">Ingrese un color en hexadecimal (6 digitos)</label>
            <input type="text" name="hex" id="hex">
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>