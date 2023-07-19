<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="width: 200px; height: 100px; background-color:white;">
        <form action="ejercicio8.php" method="get">
            <label for="ayer">Ventas Dia de Ayer</label>
            <input type="text" name="ayer">
            <label for="hoy">Ventas Dia de Hoy</label>
            <input type="text" name="hoy">
            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php
    if (isset($_GET['ayer']) && $_GET['ayer'] != "" && isset($_GET['hoy']) && $_GET['hoy'] != "") {
        $ventasAyer = $_GET['ayer'];
        $ventasHoy = $_GET['hoy'];
        if ($ventasHoy > $ventasAyer) {
            echo "Las ventas de hoy son mayores que las ventas de ayer.<br>";
            $porcentaje = ($ventasHoy - $ventasAyer) / $ventasAyer * 100;
            echo "El porcentaje de incremento es: " . round($porcentaje, 2) . "%";
        } elseif ($ventasHoy < $ventasAyer) {
            echo "Las ventas de ayer son mayores que las ventas de hoy.<br>";
            $porcentaje = ($ventasAyer - $ventasHoy) / $ventasAyer * 100;
            echo "El porcentaje de disminución es: " . round($porcentaje, 2) . "%";
        } else {
            echo "Las ventas de ayer y hoy son iguales.";
        }
    } else {
        echo '<h3 style="color:red;">Debes Ingresar todos los datos</h3>';
    }

    ?>
</body>

</html>