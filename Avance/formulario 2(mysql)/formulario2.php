<?php
include("conectar.php");
$error = array();
$vacuna_array = array("SI", "NO");
$Medio_array = array("Internet", "Radio", "TV", "Familia");
$Tipo_array = array("Selecciona Tipos", "Moderna", "AztraZeneca", "Sinopharm", "Otro");
if (isset($_POST["bandera"])) {

    //Recibo de Datos
    $nombre = (isset($_POST["nombre"])) ? $_POST["nombre"] : "";
    $sexo = (isset($_POST["sexo"])) ? $_POST["sexo"] : "";
    $correo = (isset($_POST["correo"])) ? $_POST["correo"] : "";
    $fecha = (isset($_POST["fecha"])) ? $_POST["fecha"] : "";
    $vacuna = (isset($_POST["Vacuna"])) ? $_POST["Vacuna"] : "";
    $Dosis = (isset($_POST["dosis"])) ? $_POST["dosis"] : [];
    $Tipo = (isset($_POST["Tipo"])) ? $_POST["Tipo"] : "";
    $Medio = (isset($_POST["medios"])) ? $_POST["medios"] : [];
    if ($nombre == "") {
        $error[0] = "Error, el nombre no puede estar vacio";
    }
    if ($correo == "") {
        $error[1] = "Error, la correo no puede estar vacio";
    }
    if ($fecha == "") {
        $error[2] = "Error, la fecha no puede estar vacio";
    }
    if ($sexo == "") {
        $error[3] = "Error, el sexo no puede estar vacio";
    }
    if ($vacuna == "") {
        $error[4] = "Error, la vacuna no puede estar vacio";
    }
    if ($Dosis == []) {
        $error[5] = "Error, la dosis no puede estar vacio";
    }
    if ($Tipo == "") {
        $error[6] = "Error, el tipo no puede estar vacio";
    }
    if ($Medio == []) {
        $error[7] = "Error, el medio no puede estar vacio";
    }
    if (count($error) == 0) {
        $Dosis = implode(", ", $Dosis) . "\n";
        $Medio = implode(", ", $Medio) . "\n";
        $Tipo = implode(", ", $Tipo) . "\n";
        $sql = "INSERT INTO vacuna (nombre,sexo,correo,fecha,vacuna,dosis,tipo,medios) 
        VALUES ('$nombre','$sexo','$correo','$fecha','$vacuna','$Dosis','$Tipo','$Medio')";
        if ($conexion->query($sql) === true) {
            echo "Datos insertados correctamente";
            header("Location: listar.php");
        } else {
            echo "Error " . $sql . "<br>" . $conexion->error;
        }
    }
    // if (count($error) == 0) {
    //     print "Bienvenido " . $nombre . "<br>";
    //     print "Correo: " . $correo . "<br>";
    //     print "Fecha: " . $fecha . "<br>";
    //     print "Sexo: " . $sexo . "<br>";
    //     print "Vacuna: " . $vacuna . "<br>";
    //     print "Tus Dosis son: ";
    //     foreach ($Dosis as $key => $value) {
    //         print   "<br>" . $value;
    //         if ($value == "3" && $Tipo == "Sinopharm") {
    //             print "<br> Cuenta con la tercera dosis de Sinopharm";
    //         }
    //     }
    //     print "<br>Tus Tipos de Vacunas son: ";
    //     foreach ($Tipo as $key => $value) {
    //         print   "<br>" . $value;
    //     }
    //     print "<br>Medios de Informacion: ";

    //     foreach ($Medio as $key => $value) {
    //         print   "<br>" . $value;
    //         if ($value == "Radio") {
    //             print "<br> El medio de informacion es Radio";
    //         }
    //     }
    //     $edad = date("Y") - date("Y", strtotime($fecha));
    //     print "<br>Edad: " . $edad;
    // }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .error {
            color: red;
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="formulario2.php" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="control-label">Nombre: </label>
                        <input type="text" name="nombre" class="form-control">
                        <?php (isset($error[0])) ? print "<p class='error'>" . $error[0] . "</p>" : ""; ?>

                    </div>
                    <div class="mb-3">
                        <label for="correo" class="control-label">Correo: </label>
                        <input type="email" name="correo" class="form-control">
                        <?php (isset($error[1])) ? print "<p class='error'>" . $error[1] . "</p>" : ""; ?>

                    </div>
                    <div class="mb-3">
                        <label for="fecha">Fecha Nacimiento: </label>
                        <input type="date" name="fecha" class="form-control">
                        <?php (isset($error[2])) ? print "<p class='error'>" . $error[2] . "</p>" : ""; ?>

                    </div>
                    <div class="mb-3">
                        <label for="sexo">Sexo: </label>
                        <input type="radio" name="sexo" value="Masculino" class="form-check-input" <?php if (isset($sexo) && $sexo == "Masculino") {
                                                                                                        print "checked";
                                                                                                    } ?>>Masculino
                        <input type="radio" name="sexo" value="Femenino" class="form-check-input" <?php if (isset($sexo) && $sexo == "Femenino") {
                                                                                                        print "checked";
                                                                                                    } ?>>Femenino
                        <?php (isset($error[3])) ? print "<p class='error'>" . $error[3] . "</p>" : ""; ?>

                    </div>
                    <div class="mb-3">
                        <label for="Vacuna" class="control-label">Vacuna:</label>
                        <div class="mb-3" name="Vacuna">
                            <?php
                            foreach ($vacuna_array as $value) {
                                print " <input class='form-check-input' type='radio' name='Vacuna' value='$value' ";
                                if (isset($vacuna)) {
                                    if ($vacuna == $value) {
                                        print " selected ";
                                    }
                                }
                                print ">$value</option>";
                            }
                            ?>
                        </div>
                        <?php (isset($error[3])) ? print "<p class='error'>" . $error[3] . "</p>" : ""; ?>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="Tipo">Tipo</label>
                        <select class="form-select" name="Tipo[]">
                            <?php
                            foreach ($Tipo_array as $value) {
                                print "<option value='$value'";
                                if (isset($Tipo)) {
                                    if ($Tipo == $value) {
                                        print " selected ";
                                    }
                                }
                                print ">$value</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="control-label">Dosis:</label>
                        <div class="mb-3">
                            <label for="Dosis" class="form-check-label">
                                <input type="checkbox" name="dosis[]" value="1" class="form-check-input">1ra
                            </label>
                            <label for="Dosis" class="form-check-label">
                                <input type="checkbox" name="dosis[]" value="2" class="form-check-input">2da
                            </label>
                            <label for="Dosis" class="form-check-label">
                                <input type="checkbox" name="dosis[]" value="3" class="form-check-input">3ra
                            </label>
                        </div>
                        <?php (isset($error[4])) ? print "<p class='error'>" . $error[4] . "</p>" : ""; ?>

                    </div>
                    <div class="mb-3">
                        <label class="control-label">Medios de Informacion:</label>
                        <div class="mb-3">
                            <label for="Medios" class="form-check-label">
                                <input type="checkbox" name="medios[]" value="Internet" class="form-check-input">Internet
                            </label>
                            <label for="Medios" class="form-check-label">
                                <input type="checkbox" name="medios[]" value="Radio" class="form-check-input">Radio
                            </label>
                            <label for="Medios" class="form-check-label">
                                <input type="checkbox" name="medios[]" value="TV" class="form-check-input">TV
                            </label>
                            <label for="Medios" class="form-check-label">
                                <input type="checkbox" name="medios[]" value="Familia" class="form-check-input">Familia
                        </div>
                    </div>
                    <?php (isset($error[6])) ? print "<p class='error'>" . $error[6] . "</p>" : ""; ?>


            </div>
            <div class="mb-3">
                <input type="hidden" name="bandera" value="1">
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>