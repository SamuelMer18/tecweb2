<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function sumar(float|int $a, float|int $b): float|int|null
    {
        if (($a + $b) > 20) {
            return null;
        } else {
            return $a + $b;
        }
    }
    echo "La suma es " . sumar(5, 11.1545);
    ?>
</body>

</html>