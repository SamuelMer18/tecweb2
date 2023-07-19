<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 10;
    $r = 2;
    $n = 20;
    $total = $a * (pow($r, $n) - 1) / ($r - 1);
    echo "El total a pagar después de los 20 meses es: " . $total . " bs.<br>";
    for ($i = 1; $i <= $n; $i++) {
        $pago_del_mes = $a * pow($r, $i - 1);
        echo "En el mes " . $i . " debe pagar: " . $pago_del_mes . " bs.<br>";
    }
    ?>
</body>

</html>