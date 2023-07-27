<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    echo "<h3>Ejercicio 3<h3>";
    ?>
</head>

<body>
    <?php
    $div = 10 / 3;
    print $div . "<br>";
    // se convierte el valor de $div a un número entero y se almacena en la variable $entero
    $entero = (int)$div;
    print $entero . "<br>";
    // se imprime información detallada sobre la variable $div, incluyendo su tipo de dato y su valor
    var_dump($div);
    echo "<br>";
    // se imprime información detallada sobre la variable $entero, incluyendo su tipo de dato y su valor
    var_dump($entero);
    echo "<br>";
    // se imprime el resultado de la operación de división como un número entero
    print intval(10 / 3) . "<br>";
    // se convierte el valor de $div a un número entero utilizando la función settype()
    settype($div, "integer");
    // se imprime información detallada sobre la variable $div después de la conversión, incluyendo su tipo de dato y su valor
    var_dump($div);
    // ver version de php
    phpinfo();
    ?>
</body>

</html>