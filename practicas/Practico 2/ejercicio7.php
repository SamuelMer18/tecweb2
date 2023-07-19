<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="width: 200px; height: 100px; background-color:white;">
        <form action="ejercicio7.php" method="get">
            <label for="cant">Cantidad de Estudiantes</label>
            <input type="text" name="cant">

            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php
    if (isset($_GET['cant']) && $_GET['cant'] != "") {
        $aprobados = 0;
        $reprobados = 0;
        $cant = $_GET['cant'];
        $notas = array();
        for ($i = 0; $i < $cant; $i++) {
            $nota = rand(1, 100);
            $notas[] = $nota;
            if ($nota < 51) {
                $reprobados++;
            } else {
                $aprobados++;
            }
        }
        for ($i = 0; $i < $cant; $i++) {
            echo "Alumno " . ($i + 1) . ": " . $notas[$i] . "<br>";
        }
        echo "Numero de Aprobados: " . $aprobados . "<br>";
        echo "Numero de Reprobados: " . $reprobados . "<br>";
    } else {
        echo '<h3 style="color:red;">Debes Ingresar todos los datos</h3>';
    }
    ?>
</body>

</html>