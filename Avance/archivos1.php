<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $archivo = "prueba.txt";
    if (touch($archivo)) {  //si no existe el archivo que se busca touch lo crea
        print "Archivo existe";
        $bandera = false;
        $cont = 0;

        //escribir archivo
        $linea1 = "Hola como estas\n";
        $linea2 = "Quieres salir\n";
        $linea3 = "a jugar pelota\n";
        //abrir el archivo
        $dato = fopen($archivo, "r+");
        //var_dump($dato);
        //fclose($dato);
    } else {
        print "Se ejecuto touch";
    }
    print "<br>";
    //abrir el archivo en formato lectura
    $dato = fopen($archivo, "w");
    var_dump($dato);
    fwrite($dato, $linea1);
    fwrite($dato, $linea2);
    fwrite($dato, $linea3);
    fclose($dato);
    $dato = fopen($archivo, "r");
    while ((!feof($dato))) {
        $linea = fgets($dato, 1024);
        print "<p>" . $linea . "</p>";
    }
    fclose($dato);
    $linea4 = "nos vemos a las 5\n";
    $linea5 = "en la cancha\n";
    $dato = fopen($archivo, "w");
    fwrite($dato, $linea4);
    fwrite($dato, $linea5);
    fclose($dato);
    $dato = fopen($archivo, "r");
    while ((!feof($dato))) {

        $linea = fgets($dato, 1024);
        print "<p>" . $linea . "</p>";
    }





    print "<br>";
    /* //borrar archivo
if (unlink($archivo)) {
    print "Borrar el archivo";
}
else {
    print "Error";
} */

    ?>
</body>

</html>