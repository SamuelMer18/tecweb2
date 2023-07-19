<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $empleados = array(
        1 => array('nombre' => 'Carlos', 'edad' => 15, 'casa' => 'propia'),
        2 => array('nombre' => 'Carla', 'edad' => 18, 'casa' => 'alquiler'),
        3 => array('nombre' => 'Jose', 'edad' => 45, 'casa' => 'propia')
    );

    print "<h3>Ordenamiento Ascendente por Valor</h3>";
    asort($empleados);

    foreach ($empleados as $key => $value) {
        echo "Id " . $key . ": ";
        foreach ($value as $k => $v) {
            echo $k . " = " . $v . ", ";
        }
        echo "<br>";
    }

    print "<h3>Ordenamiento descendente por clave</h3>";
    krsort($empleados);

    foreach ($empleados as $key => $value) {
        echo "Id " . $key . ": ";
        foreach ($value as $k => $v) {
            echo $k . " = " . $v . ", ";
        }
        echo "<br>";
    }
    print "<h3>2.</h3>";
    $notas = array(40, 80, 90, 100, 25, 36);
    var_dump($notas);
    echo "<br>";
    $actual = current($notas);
    $final = end($notas);
    $previo = prev($notas);
    $actual = current($notas);
    $aprobados = 0;
    foreach ($notas as $nota) {
        if ($nota >= 51) {
            $aprobados++;
        }
    }
    echo "Promedio: " . $promedio . "<br>";
    echo "Actual: " . $actual . "<br>";
    echo "Final: " . $final . "<br>";
    echo "Previo: " . $previo . "<br>";
    echo "Aprobados: " . $aprobados . "<br>";

    print "<h3>3.</h3>";
    function Mayornota($notas)
    {
        $mayor = 0;
        foreach ($notas as $nota) {
            if ($nota > $mayor) {
                $mayor = $nota;
            }
        }
        echo "La mayor nota es: " . $mayor;
    }
    $notas = array(40, 80, 90, 96, 25, 36, 34, 87, 54, 32);
    Mayornota($notas);
    ?>
</body>

</html>