<?php
$checkboxes = [
    "calidad_musica" => "Calidad de la música",
    "variedad" => "Variedad de géneros",
    "facilidad_descarga" => "Facilidad de descarga",
    "recomendacion_amigo" => "Recomendación de un amigo",
    "otros" => "Otros"
];

$error_checkbox = [];

if (isset($_POST["enviar"])) {

    $selecciones = (isset($_POST["selecciones"])) ? $_POST["selecciones"] : [];

    if (count($selecciones) < 1) {
        $error_checkbox[0] = "Por favor, seleccione al menos un motivo <br>";
    } elseif (count($selecciones) >= 3) {
        $imagen = "<img style='
        height: 100px;
        ' src='arriba.png'>";
    } else {
        $imagen = "<img style='
    
        height: 100px; class='img-thumbnail' src='abajo.png'>";
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
        <h1>¿Por qué descargas música?</h1>
        <form action="cliente.php" method="post">
            <?php foreach ($checkboxes as $key => $value) { ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="<?php echo $key; ?>" id="<?php echo $key; ?>" name="selecciones[]">
                    <label class="form-check-label" for="<?php echo $key; ?>">
                        <?php echo $value; ?>
                    </label>
                </div>
            <?php } ?>

            <?php (isset($error_checkbox[0])) ? print "<p class='error'>" . $error_checkbox[0] . "</p>" : ""; ?>
            <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
        </form>
        <div class="col-md-6">
            <?php if (isset($imagen)) echo $imagen; ?>
        </div>
    </div>

</body>

</html>