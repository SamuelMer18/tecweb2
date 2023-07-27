<?php
//para archivos que se encuentran en el mismo directorio
if (isset($_POST['archivo'])) {
    $archivo = $_POST['archivo'];
    if (file_exists($archivo)) {
        echo "El archivo existe";
    } else {
        echo "El archivo no existe";
    }
}

$archivo2 = "Ejercicio15.php";
if (file_exists($archivo2)) {
    echo "<p>Si existe " . $archivo2 . "</p>";
    echo "Tipo: " . filetype($archivo2) . "<br>";
    echo "Tamaño: " . filesize($archivo2) . "<br>";
    echo "fecha: " . fileatime($archivo2) . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="formulario3.php" method="post">
        <input type="file" name="archivo" id="archivo">
        <input type="submit" value="Enviar">
    </form>

</html>