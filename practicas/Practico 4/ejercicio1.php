<?php
if (isset($_POST['archivo'])) {
    $archivo = $_POST['archivo'];
    function calcula_extension($archivo)
    {
        if (file_exists($archivo)) {
            $extension = explode(".", $archivo);
            return $extension[1];
        } else {
            echo "El archivo no existe";
        }
    }
    print " La extension del archivo es: " . calcula_extension($archivo) . "<br>";
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
    <form action="ejercicio1.php" method="post">
        <input type="file" name="archivo" id="archivo">
        <input type="submit" value="Enviar">
    </form>

</html>