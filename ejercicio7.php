<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura While</title>
</head>

<body>
    <?php
    $i = 0;
    $s = 0;
    print "<p>Imprimir numeros</p>";
    while ($i <= 10) {
        print "<p>El numero es</p>" . $i;
        $i += 2;
        $s = $s + $i;
    }
    print "<p>La suma es :</p>" . $s;

    ?>
</body>

</html>