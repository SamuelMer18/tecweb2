<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $edad = $_GET["edad"];
    $estadoCivil = $_GET["estado"];
    if ($edad <= 40) {
        print "Disfrute de su crucero en el caribe";
        if ($estadoCivil == "Casado") {
            print " En compañia de su Familia";
        }
        print "Descuento especial de 50%";
    } else {
        print "Ven a disfrutar de retiro en el campo";
        if ($estadoCivil == "Casado") {
            print "En compañia de su familia";
        } else {
            print "Disfrute de encontrarse con usted mismo";
        }
        print "En lo alto de las montañas de Illimani";
    }
    print "<br>";
    print "Su edad es " . $edad . " años y su estado civil es " . $estadoCivil . "";
    ?>
</body>

</html>