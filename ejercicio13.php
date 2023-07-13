<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'
    );
    $dias = array(
        'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'
    );
    $nombres = array('Jose', 'Maria', 'Luis', 'Jorge');
    echo "<h3>Funcion añadir elemento al Final</h3>";
    array_push($meses, 'Agosto');
    var_dump($meses);
    echo "<h3>Funcion añadir elemento al Inicio</h3>";
    $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'
    );
    array_unshift($meses, 'Diciembre');
    var_dump($meses);
    echo "<h3>Funcion para eliminar el ultimo elemento del array</h3>";
    $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'
    );
    array_pop($meses);
    var_dump($meses);
    echo "<h3>Funcion para eliminar un elemento de un array </h3>";
    $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'
    );
    $datos = array_splice($meses, 1, 6);
    var_dump($datos);
    echo "<h3>Funcion para combinar 2 arrays</h3>";
    $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'
    );
    $mezcla = array_merge($dias, $nombres);
    foreach ($mezcla as $key => $value) {
        print "<p>El Elemento $key el valor $value </p>";
    }
    echo "<h3>Funcion para ordenar un array</h3>";
    sort($mezcla);
    foreach ($mezcla as $key => $value) {
        print "<p>El Elemento $key el valor $value </p>";
    }
    echo "<h3>Funcion para ordenar un array de forma inversa</h3>";
    rsort($mezcla);
    foreach ($mezcla as $key => $value) {
        print "<p>El Elemento $key el valor $value </p>";
    }

    ?>
</body>

</html>