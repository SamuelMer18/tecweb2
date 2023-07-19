<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Funcion ";
    function sumar($a, $b): int
    {
        return $a + $b;
    }
    try {
        print "El resultado es " . sumar(10, 5) . "<br>";
        print "El resultado es " . sumar(10, 9.5) . "<br>";
    } catch (\Throwable $e) {
        print "Error " . $e->getMessage();
    }
    echo "<h3>Funcion con muchas variables</h3>";
    function sumar1($tipo, ...$num)
    {
        $sum = 0;
        foreach ($num as $valor) {
            $sum = $sum + $valor;
        }
        return $tipo . $sum;
    }
    print "El resultado es " . sumar1("Bolivianos ", 10, 20, 50, 0.5, 0.2, 1, 5, 2, 200);
    echo "<h3>Cambiar al return</h3>";
    function generar($inicio, $fin, $saldo = 2)
    {
        for ($i = $inicio; $i < $fin; $i += $saldo) {
            yield $i;
        }
    }
    foreach (generar(1, 15) as $key => $value) {
        print $value;
    }
    print "<br>";
    foreach (generar(5, 25) as $key => $value) {
        print $value;
    }
    print "<br>";
    ?>
</body>

</html>