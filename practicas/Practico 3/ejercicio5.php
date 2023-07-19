<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $productos = array('Lapiz', 'borrador', 'cuadernos', 'libros', 'hojas');

    $indice_cuadernos = array_search('cuadernos', $productos);
    if ($indice_cuadernos !== false) {
        echo "<h3>Producto actual: </h3>" . $productos[$indice_cuadernos];
    } else {
        echo "<h3>'Cuadernos' no se encuentra en el array de productos.</h3>";
    }
    echo "<h3>Último producto: </h3>" . end($productos);
    if ($indice_cuadernos !== false && isset($productos[$indice_cuadernos + 1])) {
        echo "<h3>Producto siguiente: </h3>" . $productos[$indice_cuadernos + 1];
    } else {
        echo "<h3>No hay un producto después de 'Cuadernos' en el array de productos.</h3>";
    }
    ?>

</body>

</html>