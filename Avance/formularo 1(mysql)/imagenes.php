<?php
if (isset($_FILES['foto'])) {
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        $errores = array();
        $filename = $_FILES['foto']['name'];
        $fileSize = $_FILES['foto']['size'];
        $fileType = $_FILES['foto']['type'];
        $fileExtArr = explode(".", $filename);
        $fileExt = strtolower(end($fileExtArr));
        $extensiones = array("jpg", "png", "svg", "webp", "git", "tiff", "jfif", "jpeg");
        if (in_array($fileExt, $extensiones) == false) {
            $errores[] = "Extension no permitida";
        }
        if ($fileSize > 1024 * 1000 * 2) {
            $errores[] = "El archivo excedio su limite";
        }
        if (file_exists("img/" . $filename)) {
            $errores[] = "Imagen ya existe";
        }
        if (empty($errores)) {
            copy($_FILES['foto']['tmp_name'], "img/" . $filename);
            echo "Archivo subido";
        } else {
            print_r($errores);
        }
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
</head>

<body>
    <br>
    <div class="container">
        <h1>Subir Archivo</h1>
        <form action="imagenes.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <!-- <label for="foto" class="form-label">Foto</label> -->
                <input type="file" class="form-control" id="foto" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

</body>

</html>