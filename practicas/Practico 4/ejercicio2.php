<?php
if (isset($_POST['archivo'])) {
    $archivo = $_POST['archivo'];
    function calcula_extension($archivo)
    {
        if (file_exists($archivo)) {
            $extension = explode(".", $archivo);
            return tipo_fichero($extension[1]);
        } else {
            echo "El archivo no existe";
        }
    }
    function tipo_fichero($extension)
    {
        $tiposFicheros = array(
            "PDF" => "Documento Adobe PDF",
            "TXT" => "Documento de texto",
            "HTML" => "Documento HTML",
            "HTM" => "Documento HTML",
            "PPT" => "Presentación Microsoft Powerpoint",
            "DOC" => "Documento Microsoft Word",
            "GIF" => "Imagen GIF",
            "JPG" => "Imagen JPG",
            "ZIP" => "Archivo comprimido ZIP"
        );
        $extmayus = strtoupper($extension);
        if (array_key_exists($extmayus, $tiposFicheros)) {
            return $tiposFicheros[$extmayus];
        } else {
            return "Archivo " . $extmayus;
        }
    }
    print calcula_extension($archivo) . "<br>";
} else {
    echo "No se ha enviado ningun archivo";
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
    <form action="ejercicio2.php" method="post">
        <input type="file" name="archivo" id="archivo">
        <input type="submit" value="Enviar">
    </form>

</html>