<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $n = $_GET["n"];
    function sueldos($n)
    {
        for ($i = 0; $i < $n; $i++) {
            $sueldo = rand(1000, 10000);
            echo "Sueldo sin Descuento: " . $sueldo;
            echo "<br>";
            yield from descuento1(($sueldo > 3500), $sueldo, ($sueldo > 5000));
        }
    }
    function descuento1($val,  $sueldo,  $val2)
    {
        if ($val == true && $val2 == false) {
            $descuento = $sueldo - ($sueldo * 0.13);
            echo "EL sueldo sera de : " . round($descuento);
            echo "<br>";
        } else if ($val2 == true) {
            yield descuento2($sueldo);
        }
    }
    function descuento2($sueldo)
    {
        $descuento1 = $sueldo * 0.13;
        $sueldo1 = $sueldo - $descuento1;
        $descuento2 = $sueldo1 * 0.1271;
        $sueldoFinal = $sueldo1 - $descuento2;
        echo "EL sueldo sera de : " . round($sueldoFinal);
        echo "<br>";
    }
    foreach (sueldos($n) as $value) {
        print $value;
        echo "<br>";
    }

    ?>


</body>

</html>