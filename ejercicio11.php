<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 0;
    //Metodo Break
    for ($i = 0; $i < 100; $i++) {
        if ($i % 7 == 0) {
            print "<p>El numero es multiplo de 7: " . $i . "</p>";
        }
        if ($i == 77) {
            $a = $i;
            print "<p>El numero es magico</p>";
            break;
        }
    }
    //Metodo Continue
    print "El valor en el cual se quedo fue: " . $a . "<br>";
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 == 1) {
            continue;
        }
        print "<p>El valor de i es: " . $i . "</p>";
    }

    ?>
</body>

</html>