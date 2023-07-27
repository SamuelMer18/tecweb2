<?php
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $fecha = date("d/m/Y H:i:s");
    if (isset($_COOKIE['datos'])) {
        $datos = explode("|", $_COOKIE['datos']);
        print "visita" . (++$datos[0]);
        setcookie("datos", $datos[0] . "|" . $fecha);
    } else {
        print "cookie no registrada";
        setcookie("datos", "1|" . $fecha);
    }

    /*
    //borrar una cookie
    $fecha=time()-1;
    setcookie("datos",$nombre.$correo,$fecha);
    */
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <label for="correo">Correo: </label>
        <input type="text" name="correo" id="correo">
        <label for="clave">Clave: </label>
        <input type="password" name="clave" id="clave">
        <input type="submit" value="Enviar" class="btn btn-outline-primary">


    </form>
</body>

</html>