<?php
function tipo_fichero($archivo, $formato)
{
    if (file_exists($archivo)) {
        $extension = explode(".", $archivo);
        $extmayus = strtoupper($extension[1]);
        if ($extmayus == "MP3" && $formato == "mp3") {
            return "mp3";
        } else {
            return false;
        }
        if ($extmayus == "MP4" && $formato == "mp4") {
            return "mp4";
        } else {
            return false;
        }
    } else {
        return false;
    }
}
$error = array();
$generos = ["Todos", "Folcklore", "Rock", "Jazz"];
$formatos = ["mp3", "mp4"];
if (isset($_POST["bandera"])) {

    $nombre_cancion = (isset($_POST["nombre_cancion"])) ? $_POST["nombre_cancion"] : "";
    $titulo_album = (isset($_POST["titulo_album"])) ? $_POST["titulo_album"] : "";
    $fecha = (isset($_POST["fecha"])) ? $_POST["fecha"] : "";
    $genero = (isset($_POST["genero"])) ? $_POST["genero"] : "";
    $formato = (isset($_POST["formato"])) ? $_POST["formato"] : "";
    $archivo = $_POST['archivo'];


    if ($nombre_cancion == "") {
        $error[0] = "El nombre de la canción no puede estar vacío <br>";
    }
    if ($titulo_album == "") {
        $error[1] = "El título del álbum no puede estar vacío <br>";
    }
    if ($fecha == "") {
        $error[2] = "La fecha no puede estar vacía <br>";
    }
    if ($genero == "") {
        $error[3] = "El género musical no puede estar vacío <br>";
    }
    if ($formato == "") {
        $error[4] = "El formato no puede estar vacío <br>";
    }
    if (file_exists($archivo)) {
        $archivo = $_POST['archivo'];
        if (tipo_fichero($archivo, $formato) == false) {
            $error[6] = "El formato del archivo no coincide con el formato seleccionado";
        }
    } else {
        $error[5] = "No se ha enviado ningun archivo";
    }


    if (count($error) == 0) {
        header("Location: cliente.php");
    }
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
                <form class="row g-3" action="ejercicio3.php" method="post">
                    <div class="col-md-6">
                        <label for="nombre_cancion" class="form-label">Nombre de la canción:</label>
                        <input type="text" class="form-control" id="nombre_cancion" name="nombre_cancion">
                        <?php (isset($error[0])) ? print "<p class='error'>" . $error[0] . "</p>" : ""; ?>

                    </div>
                    <div class="col-md-6">
                        <label for="titulo_album" class="form-label">Título del álbum:</label>
                        <input type="text" class="form-control" id="titulo_album" name="titulo_album">
                        <?php (isset($error[1])) ? print "<p class='error'>" . $error[1] . "</p>" : ""; ?>
                    </div>
                    <div class="col-md-6">
                        <label for="fecha" class="form-label">Fecha:</label>
                        <input type="date" class="form-control" id="fecha" name="fecha">
                        <?php (isset($error[2])) ? print "<p class='error'>" . $error[2] . "</p>" : ""; ?>
                    </div>
                    <div class="col-md-6">
                        <label for="genero" class="form-label">Género musical:</label>
                        <select class="form-select" name="genero" id="genero">
                            <?php foreach ($generos as $genero) : ?>
                                <option value="<?php echo $genero; ?>"><?php echo $genero; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php (isset($error[3])) ? print "<p class='error'>" . $error[3] . "</p>" : ""; ?>
                    </div>
                    <div class="col-md-6">
                        <label for="formato" class="form-label">Formato:</label>
                        <select class="form-select" name="formato" id="formato">
                            <?php foreach ($formatos as $formato) : ?>
                                <option value="<?php echo $formato; ?>"><?php echo $formato; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php (isset($error[4])) ? print "<p class='error'>" . $error[4] . "</p>" : ""; ?>
                    </div>
                    <div class="col-md-6">
                        <label for="archivo" class="form-label">Archivo:</label>
                        <input type="file" class="form-control" id="archivo" name="archivo">
                        <?php
                        (isset($error[5])) ? print "<p class='error'>" . $error[5] . "</p>" : "";
                        (isset($error[6])) ? print "<p class='error'>" . $error[6] . "</p>" : "";
                        ?>
                    </div>
                    <div class="col-12">
                        <input type="hidden" name="bandera" value="1">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>


</html>