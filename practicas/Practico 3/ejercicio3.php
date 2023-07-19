<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = ['a' => 'textoc', 'b' => 'textoa', 'c' => 'textob'];
    asort($a);

    echo "<h3>Array ordenado por valor: </h3>";
    print_r($a);
    ?>

</body>

</html>