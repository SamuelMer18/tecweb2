<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="width: 200px; height: 100px; background-color:white;">
        <form action="ejercicio2.php" method="get">
            <label for="cant">Cantidad de Peliculas a Comprar: </label>
            <input type="text" name="cant">
            <label for="peliculasec">Pelicula: </label>
            <select name="peliculasec" id="peliculasec">
                <option value="Hombre Araña">Hombre Araña</option>
                <option value="Dragon Rojo">Dragon Rojo</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php
    $pelicula = array(
        "Hombre Araña" => array(
            "nombre" => "Hombre araña",
            "tipo" => "acción",
            "estado" => "disponible",
            "precio" => 55
        ),
        "Dragon Rojo" => array(
            "nombre" => "Dragon Rojo",
            "tipo" => "infantil",
            "estado" => "no disponible",
            "precio" => 35
        )
    );
    if (isset($_GET['cant']) && $_GET['cant'] != "") {
        echo "Cantidad de Entradas: " . $cant = $_GET['cant'];
        echo "<br>Pelicula: " . $peliculasec = $_GET['peliculasec'];
        $total = $cant * $pelicula[$peliculasec]['precio'];
        echo "<br>El total a pagar es: " . $total . " bs.";
        $cont = 0;
        foreach ($pelicula as $key => $value) {
            if ($value['estado'] != "disponible") {
                $cont++;
            }
        }
        echo "<br>La cantidad de peliculas no disponibles son: " . $cont;
    } else {
        echo '<h3 style="color:red;">Debes Ingresar todos los datos</h3>';
    }
    echo "<h2>Peliculas sin Agregar una nueva:</h2> ";
    foreach ($pelicula as $key => $value) {
        echo "<h3>" . $key . "</h3>";
        foreach ($value as $key2 => $value2) {
            echo "<p>" . $key2 . ": " . $value2 . "</p>";
        }
    }
    $pelicula["Iron Man"] = array("nombre" => "Iron Man", "tipo" => "infantil", "estado" => "disponible", "precio" => 45);
    echo "<h2>Peliculas Agregagando una nueva:</h2> ";
    foreach ($pelicula as $key => $value) {
        echo "<h3>" . $key . "</h3>";
        foreach ($value as $key2 => $value2) {
            echo "<p>" . $key2 . ": " . $value2 . "</p>";
        }
    }


    ?>
</body>

</html>