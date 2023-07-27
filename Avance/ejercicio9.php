<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numero = $_GET['n'];
    $b = "";
    do {
        $r = $numero % 2;
        $b = $r . $b;
        $numero = intval($numero / 2);
    } while ($numero >= 2);
    $b = $b . $numero;
    print "<p>El resultado es </p>" . $b;
    ?>
</body>

</html>