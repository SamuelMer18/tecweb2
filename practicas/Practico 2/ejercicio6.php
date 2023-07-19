<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['genero']) && isset($_GET['nombre']) && $_GET['genero'] != "" && $_GET['nombre'] != "") {
        $genero = $_GET['genero'];
        $nombre = $_GET['nombre'];
        if ($genero == "Femenina" || $genero == "femenina") {
            echo "Sra. " . $nombre . " encantado de Saludarte";
        } else if ($genero == "Masculino" || $genero == "masculino") {
            echo "Sr. " . $nombre . " encantado de Saludarte";
        } else {
            echo "No ingresaste un genero valido";
        }
    } else {
        echo '<h3 style="color:red";>Debes Ingresar todos los datos</h3>';
    }
    ?>
    <div style="width: 200px; height: 100px; background-color:white;">
        <form action="ejercicio6.php" method="get">
            <label for="genero">Genero</label>
            <input type="text" name="genero">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>