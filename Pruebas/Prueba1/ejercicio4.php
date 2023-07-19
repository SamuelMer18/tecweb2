<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="width: 200px; height: 100px; background-color:white;">
        <form action="ejercicio4.php" method="get">
            <label for="liminf">Limite Inferior: </label>
            <input type="text" name="liminf">
            <label for="limsup">Limite Superior: </label>
            <input type="text" name="limsup">
            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php
    if (isset($_GET['liminf']) && isset($_GET['limsup']) && $_GET['liminf'] != null && $_GET['limsup'] != null) {
        $liminf = $_GET['liminf'];
        $limsup = $_GET['limsup'];
        echo "<h3>Limite Inferior: " . $liminf . "</h3>";
        echo "<h3>Limite Superior: " . $limsup . "</h3>";
        if ($liminf > $limsup) {
            echo '<h3 style="color:red;">El limite inferior no puede ser mayor al limite superior</h3>';
        } else {
            $suma = 0;
            $cont = 0;
            $igual = false;
            do {
                $num = rand(0, 100);
                if ($num >= $liminf && $num <= $limsup) {
                    $suma += $num;
                } else {
                    $cont++;
                }
                if ($num == $liminf || $num == $limsup) {
                    $igual = true;
                }
                echo $num . " - ";
            } while ($num != 0);
            echo "<h3>La suma de los numeros que estan dentro del intervalo es: " . $suma . "</h3>";
            echo "<h3>La cantidad de numeros que estan fuera del intervalo es: " . $cont . "</h3>";
            if ($igual) {
                echo "<h3>Se encontro un numero igual a alguno de los intervalos</h3>";
            } else {
                echo "<h3>No se encontro un numero igual a alguno de los intervalos</h3>";
            }
        }
    } else {
        echo '<h3 style="color:red;">Debes Ingresar todos los datos</h3>';
    }
    ?>
</body>

</html>