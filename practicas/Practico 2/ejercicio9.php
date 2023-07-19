<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="width: 200px; height: 100px; background-color:white;">
        <form action="ejercicio9.php" method="get">
            <label for="hijos">Numero de Hijos</label>
            <input type="text" name="hijos">
            <label for="edadEscolar">Edad Escolar</label>
            <input type="text" name="edadEscolar">
            <label for="madreViuda">Madre Viuda</label>
            <input type="checkbox" name="madreViuda">
            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php
    if (isset($_GET['hijos']) && $_GET['hijos'] != "" && isset($_GET['edadEscolar']) && $_GET['edadEscolar'] != "") {
        $numeroHijos = $_GET['hijos'];
        $edadEscolar = $_GET['edadEscolar'];
        if (isset($_GET['madreViuda'])) {
            $madreViuda = $_GET['madreViuda'];
        } else {
            $madreViuda = false;
        }
        $subsidioBase = 0;
        $adicionalHijos = 0;
        $adicionalEdadEscolar = 0;
        $adicionalMadreViuda = 0;
        if ($numeroHijos <= 2) {
            $subsidioBase = 70.00;
        } elseif ($numeroHijos <= 5) {
            $subsidioBase = 90.00;
        } else {
            $subsidioBase = 120.00;
        }

        if ($edadEscolar >= 6 && $edadEscolar <= 18) {
            $adicionalEdadEscolar = 10.00;
        }

        if ($madreViuda) {
            $adicionalMadreViuda = 20.00;
        }

        $totalSubsidio = $subsidioBase + $adicionalHijos + $adicionalEdadEscolar + $adicionalMadreViuda;

        echo "Monto mensual que recibirá la familia es: " . $totalSubsidio . " bs.";
    } else {
        echo '<h3 style="color:red;">Debes Ingresar todos los datos</h3>';
    }

    ?>
</body>

</html>