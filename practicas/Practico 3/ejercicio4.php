<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $peliculas = array(
        array('Terror', '1', '2', '3'),
        array('Comedia', '4', '5', '6'),
        array('Acción', '7', '8', '9'),
        array('Infantil', '10', '11', '12'),
    );

    echo "<h3>Películas de Comedia:</h3>";
    foreach ($peliculas as $pelicula) {
        if ($pelicula[0] == 'Comedia') {
            echo implode(', ', array_slice($pelicula, 1)) . "<br>";
        }
    }
    $nombre_pelicula = isset($_GET['nombre_pelicula']) ? $_GET['nombre_pelicula'] : '';

    echo "<h3>Buscar película:</h3>";
    $encontrada = false;
    foreach ($peliculas as $pelicula) {
        if (in_array($nombre_pelicula, $pelicula)) {
            echo "La película " . $nombre_pelicula . " fue encontrada en la categoría " . $pelicula[0] . "<br>";
            $encontrada = true;
            break;
        }
    }
    if (!$encontrada) {
        echo "La película " . $nombre_pelicula . " no fue encontrada.<br>";
    }
    ?>

</body>

</html>