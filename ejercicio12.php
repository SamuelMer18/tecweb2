<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num = [];
    //llenado de datos
    for ($i = 0; $i < 10; $i++) {
        $num[$i] = $i;
    }
    echo "<h3>Mostramos los datos utilizando vardump</h3>";
    var_dump($num);
    echo "<h3>Mostramos los datos utilizando foreach</h3>";
    foreach ($num as $key) {
        print "<p>El dato es: $key </p>";
    }
    $meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
    print "<p>El mes actual es: $meses[6] </p>";

    foreach ($meses as $key) {
        print "<p>El mes es:.$key</p>";
    }
    echo "<h3>Imprimir Notas aleatorias a array de nombres sin utilizas array asociativo</h3>";
    $notas = [];
    $nombres = array('Albert', 'Alex', 'Brandom', 'Yerson', 'Luis', 'Carlos');
    for ($i = 0; $i < 6; $i++) {
        $notas[$i] = rand(1, 100);
        print "<p>El alumno $nombres[$i] es:$notas[$i]</p>";
    }
    echo "<h3>Imprimir Notas aleatorias a array de nombres utilizando array asociativo</h3>";
    $notasnom = array(
        1 => ['nombre' => 'Albert', 'nota' => rand(1, 100)],
        2 => ['nombre' => 'Alex', 'nota' => rand(1, 100)],
        3 => ['nombre' => 'Brandom', 'nota' => rand(1, 100)],
        4 => ['nombre' => 'Yerson', 'nota' => rand(1, 100)],
        5 => ['nombre' => 'Luis', 'nota' => rand(1, 100)],
        6 => ['nombre' => 'Carlos', 'nota' => rand(1, 100)],
    );
    foreach ($notasnom as $indice => $estudiante) {
        print "<p>El alumno {$estudiante['nombre']} tiene una nota de {$estudiante['nota']}</p>";
    }
    ?>
</body>

</html>