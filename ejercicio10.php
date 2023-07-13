<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    print "<ul>";
    for ($i = 0; $i < 10; $i++) {
        print "<li>el valor es: " . $i . "</li>";
    }
    print "</ul>";

    print "<ul>";
    $p = 1;
    for ($i = 10; $i > 0; $i -= 2) {
        print "<li>el valor es: " . $i . "</li>";
        $p = $p * $i;
    }
    print "<p>El producto de es :</p>" . $p;

    print "</ul>";

    ?>
</body>

</html>