<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <?php
    $estadocivil = $_GET["estado"];
    print "Invitamos a disfrutar de tus vacaciones <br>";
    switch ($estadocivil) {
        case 'casado' || "casada":
            print "Elija un lugar en familia";
            break;
        case 'soltera' || "soltero":
            print "Elija el lugar donde pueda conocer personas";
            break;
        case 'divorciado' || "divorciada":
            print "Elija un lugar para olvidar sus problemas";
            break;
        case 'viudo' || "viuda":
            print "Elija un lugar para vivirmejores momentos";
            break;
        case 'juntado' || "juntada" || "complicado" || "separado" || "separada":
            print "Elija un lugar simple en su vida";
            break;
    }

    print "<br>Disfrute su viaje";
    ?>
</body>

</html>