<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $dias = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo', 'Ultimo');
    print var_dump($dias) . "<br>";
    print "<h3>current() devuelve el elemento actual en un array</h3>";
    print current($dias) . "<br>";
    print "<h3>next() avanza el puntero interno de un array</h3>";
    print next($dias) . "<br>";
    print "<h3>end() mueve el puntero interno de un array al ultimo elemento</h3>";
    print end($dias) . "<br>";
    print "<h3>prev() retrocede el puntero interno de un array</h3> ";
    print prev($dias) . "<br>";
    define('platos', ['saice', 'picante', 'ranga']);
    foreach (platos as $key => $value) {
        print "<p>valor " . $value . "</p>";
    }
    print "<h3>Arrays Multidimencionales</h3>";
    $Bolivia = array(
        array('Tarija', 'Cercado', 'Alivez', 'Gran Chaco', 'Oconnor', 'Arce'),
        array('La Paz', 'Murillo', 'Aroma', 'Larecaja', 'Los Andes', 'Manco Kapac'),
        array('Sucre', 'Oropeza', 'Azurduy', 'Belisario Boeto', 'Hernando Siles', 'Jaime Zudanez'),
    );
    print "<h3>Mostrarmos todo los valores del array de arrays</h3> ";
    for ($i = 0; $i < count($Bolivia); $i++) {
        for ($j = 0; $j < count($Bolivia[$i]); $j++) {
            print   $Bolivia[$i][$j] . " ";
        }
        print "<br>";
    }
    ?>
</body>

</html>