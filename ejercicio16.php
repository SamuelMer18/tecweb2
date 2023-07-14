<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function saludo($nombre)
    {
        print "Hola " . $nombre . "<br>";
    }
    function ValidarEdad($edad)
    {
        if ($edad > 40) {
            $respuesta = "Tercera edad";
        } else {
            $respuesta = "No es tercera edad";
        }
        return $respuesta;
    }
    saludo("Albert");
    saludo("Albert");
    saludo("Albert");
    print "La respuesta es " . ValidarEdad(50) . "<br>";
    ?>
</body>

</html>