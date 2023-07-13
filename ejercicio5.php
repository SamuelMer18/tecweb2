<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <?php
    $edad = $_GET["edad"];
    if ($edad <= 20) {
        print "<p>Te regalamos boletos para el cine</p>";
    }
    if ($edad > 20 && $edad <= 30) {
        print "<p>Te regalamos boletoso para un concierto en Dubai</p>";
    }
    if ($edad > 30 && $edad <= 40) {
        print "<p>Te regalamos boletos para la Opera</p>";
    }
    if ($edad > 40) {
        print "<p>Te regalamos boletos para el teatro</p>";
    }


    ?>
</body>

</html>