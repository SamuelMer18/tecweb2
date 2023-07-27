<?php
if (isset($_GET['fecha'])) {
    $fecha = $_GET['fecha'];
    $fecha = trim($fecha);
    if ($fecha == "") {
        print "Ingrese la fecha";
    } else {
        $fecha_array = explode("-", $fecha);
        if (checkdate($fecha_array[1], $fecha_array[2], $fecha_array[0])) {
            print "<p>fecha correcta " . $fecha . "</p>";
        } else {
            print "<p>Fecha Incorrecta</p>";
        }
    }
    $cumple = mktime(0, 0, 0, 8, 27, 1990); //mm / dd / YY
    print $cumple;
    $time = time();
    $fech = date("d-m-Y", $time);
    $hora = date("h:i:s", $time);
    $diames = date("j", $time);
    $mes = date("F", $time);
    $anio = date("Y", $time);
    $Hora = date("H", $time);
    $am = date('A', $time);
    $edad = $time - $cumple;
    print "Tu Naciste " . date('l', $cumple) . "<br>";
    print "Tiempo es " . ($edad / 60 / 60 / 24 / 365) . " años <br>";
    print $hora . ",<br>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Formulario 2</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="formulario2.php" method="get">
                    <label for="fecha" class="control-label">Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control">
                    <br>
                    <input type="submit" value="Evaluar" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
</body>

</html>