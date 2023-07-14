<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Ordenar de manera inversa
    $nombres = array('Juana', 'Luis', 'Ana', 'Gerardo', 'Vanessa');

    foreach ($nombres as $key => $value) {
        print "<p>Id " . $key . " Valor " . $value . "</p>";
    }
    echo "<hr>";
    print "<h3>Ordenados de forma inversa rsort</h3>";
    rsort($nombres);
    foreach ($nombres as $key => $value) {
        print "<p>Id " . $key . " Valor " . $value . "</p>";
    }
    echo "<hr>";
    print "<h3>Ordenamiento asort</h3>";
    asort($nombres);
    foreach ($nombres as $key => $value) {
        print "<p>Id " . $key . " Valor " . $value . "</p>";
    }
    $estudiantes = [
        'nombre' => 'Juan',
        'apellido' => 'Lopez',
        'edad' => 15,
        'carrera' => 'Derecho'
    ];
    arsort($estudiantes);
    print "<hr>";
    print "<h3>Ordenamiento descendente arsort segun su llave</h3>";
    foreach ($estudiantes as $key => $value) {
        print "<p>Id " . $key . " Valor " . $value . "</p>";
    }
    krsort($estudiantes);
    print "<hr>";
    print "<h3>Ordenamiento Ascendente krsort segun su llave </h3>";
    foreach ($estudiantes as $key => $value) {
        print "<p>Id " . $key . " Valor " . $value . "</p>";
    }
    ?>

</body>

</html>