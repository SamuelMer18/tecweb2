<?php
include("conectar.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM usuario WHERE id=$id";
    if ($conexion->query($sql) === TRUE) {
        echo "Usuario Eliminado";
        header("Location: listar.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
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

</body>

</html>