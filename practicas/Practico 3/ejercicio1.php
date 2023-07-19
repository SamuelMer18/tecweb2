<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $libros = array(
        1 => array(
            'titulo' => 'El nombre de la rosa',
            'autor' => 'Umberto Eco',
            'editorial' => 'Santillana',
            'año' => 2018,
        ),
        2 => array(
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel Garcia Marquez',
            'editorial' => 'Santillana',
            'año' => 2019,
        ),
        3 => array(
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'editorial' => 'Seix Barral',
            'año' => 2018,
        ),
    );

    echo "<h3>Libros con más de 5 años de publicación:</h3>";
    $actual_year = date("Y");
    foreach ($libros as $libro) {
        if ($actual_year - $libro['año'] > 5) {
            print_r($libro);
        }
    }

    echo "<h3>Libros del año 2018:</h3>";
    $count = 0;
    foreach ($libros as $libro) {
        if ($libro['año'] == 2018) {
            $count++;
        }
    }
    echo "Libros del año 2018: " . $count;

    echo "<h3>Libros ordenados por título:</h3>";
    usort($libros, function ($item1, $item2) {
        return $item1['titulo'] <=> $item2['titulo'];
    });
    print_r($libros);

    echo "<h3>Libros ordenados por llave:</h3>";
    $libros_plano = array();
    foreach ($libros as $clave => $valor) {
        $libros_plano[$clave] = $valor['titulo'];
    }
    ksort($libros_plano);
    print_r($libros_plano);

    echo "<h3>Libros de un autor específico:</h3>";
    $autor_buscado = 'Umberto Eco';
    foreach ($libros as $libro) {
        if ($libro['autor'] == $autor_buscado) {
            print_r($libro);
        }
    }
    ?>

</body>

</html>