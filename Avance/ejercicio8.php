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
    do {

        print "<p>El numero es </p>" . $i;
        $i += 2;
        $s = $s + $i;
    } while ($i <= 10);
    print "<p>La suma es :</p>" . $s;
    $intentos = 0;
    do {
        $nombre = $_GET['nombre'];
        $contraseña = $_GET['contraseña'];
        $intentos++;
    } while ($nombre == "upds" && $contraseña == "123456Tja" && $intentos <= 3);
    print "<p>Malvenido</p>"
    ?>
</body>

</html>