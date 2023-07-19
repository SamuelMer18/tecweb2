<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $pedido = array(
        1 => array(
            'Pizza' => 'Jamon',
            'fecha' => '12/05/2022',
            'precio' => 30,
        ),
        2 => array(
            'Pizza' => 'Champiñones',
            'fecha' => '13/05/2022',
            'precio' => 45,
        ),
        3 => array(
            'Pizza' => 'Jamon',
            'fecha' => '12/05/2022',
            'precio' => 60,
        ),
    );

    $total = 0;
    foreach ($pedido as $p) {
        $total += $p['precio'];
    }
    echo "<h3>Total del pedido: </h3>" . $total;

    usort($pedido, function ($a, $b) {
        return $b['precio'] <=> $a['precio'];
    });
    echo "<h3>Pedido ordenado por precio (descendente): </h3>";
    print_r($pedido);

    krsort($pedido);
    echo "<h3>Pedido ordenado por llave (descendente): </h3>";
    print_r($pedido);

    $contador_jamon = 0;
    foreach ($pedido as $p) {
        if ($p['Pizza'] == 'Jamon') {
            $contador_jamon++;
        }
    }
    echo "<h3>Contador de pizzas de Jamon: </h3>" . $contador_jamon;
    ?>

</body>

</html>