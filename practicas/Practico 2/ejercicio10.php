<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="width: 200px; height: 100px; background-color:white;">
        <form action="ejercicio10.php" method="get">
            <label for="tiempoEstacionamiento">Tiempo de Estacionamiento (en minutos)</label>
            <input type="text" name="tiempoEstacionamiento">
            <br> <label for="diaSemana">Día de la Semana</label>
            <select name="diaSemana">
                <option value="lunes">Lunes</option>
                <option value="martes">Martes</option>
                <option value="miércoles">Miércoles</option>
                <option value="jueves">Jueves</option>
                <option value="viernes">Viernes</option>
                <option value="sábado">Sábado</option>
                <option value="domingo">Domingo</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
        <?php
        if (isset($_GET['tiempoEstacionamiento']) && $_GET['tiempoEstacionamiento'] != "" && isset($_GET['diaSemana']) && $_GET['diaSemana'] != "") {

            $tiempoEstacionamiento = $_GET['tiempoEstacionamiento'];
            $diaSemana = $_GET['diaSemana'];

            $tiempoEstacionamientoHoras = ceil($tiempoEstacionamiento / 60); // Convertimos los minutos a horas y redondeamos hacia arriba para considerar cualquier fracción como una hora completa

            $tarifa = 0.00;

            if ($diaSemana == "lunes" || $diaSemana == "martes" || $diaSemana == "miércoles") {
                $tarifa = 2.00;
            } elseif ($diaSemana == "jueves" || $diaSemana == "viernes") {
                $tarifa = 2.50;
            } elseif ($diaSemana == "sábado" || $diaSemana == "domingo") {
                $tarifa = 3.00;
            } else {
                echo "Error: Día de la semana incorrecto.";
                exit;
            }

            $costoEstacionamiento = $tiempoEstacionamientoHoras * $tarifa;
            echo "Tiempo de estacionamiento: " . $tiempoEstacionamiento . " minutos<br>";
            echo "Día de la semana: " . $diaSemana . "<br>";
            echo "El cliente debe pagar: " . $costoEstacionamiento . " bs.";
        } else {
            echo "Ingrese un tiempo de estacionamiento";
        }
        ?>
    </div>
</body>

</html>