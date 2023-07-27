<?php
include("conectar.php");
$sql2 = "SELECT * FROM categoria";
$r2 = mysqli_query($conexion, $sql2);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //seleccionar los datos de la tabla usuario y tambien el nombre de la tabla categoria que esta su id en tabla usuario
    $sql = "SELECT usuario.*, categoria.nombre_c as categoria FROM usuario INNER JOIN categoria ON usuario.id_cat = categoria.id WHERE usuario.id = $id";
    $r = mysqli_query($conexion, $sql);
    $data = mysqli_fetch_array($r);
}


$error = array();
$idioma_array = array("Selecciona Idioma", "Español", "Ingles", "Portugues", "Frances", "Aleman", "Italiano");

if (isset($_POST["bandera"])) {

    $nombre = (isset($_POST["nombre"])) ? $_POST["nombre"] : "";
    $contraseña = (isset($_POST["contraseña"])) ? $_POST["contraseña"] : "";
    $comentario = (isset($_POST["comentario"])) ? $_POST["comentario"] : "";
    $idioma = (isset($_POST["Idioma"])) ? $_POST["Idioma"] : "";
    $estadocivil = (isset($_POST["Estado"])) ? $_POST["Estado"] : "";
    $pasatiempos = (isset($_POST["pasatiempo"])) ? $_POST["pasatiempo"] : [];
    $platos = (isset($_POST["platos"])) ? $_POST["platos"] : [];
    $categoria = (isset($_POST["Categoria"])) ? $_POST["Categoria"] : "";

    if ($nombre == "") {
        $error[0] = "Error, el nombre no puede estar vacio";
    }
    if ($contraseña == "" || (strlen($contraseña) < 8)) {
        $error[1] = "Error, la contraseña no puede estar vacio y debe tener mas de 8 caracteres";
    }
    if ($comentario == "") {
        $error[2] = "Error, el comentario no puede estar vacio";
    }
    if ($idioma == "") {
        $error[3] = "Error, el idioma no puede estar vacio";
    }
    if ($estadocivil == "") {
        $error[4] = "Error, el estado civil no puede estar vacio";
    }
    if ($pasatiempos == []) {
        $error[5] = "Error, el pasatiempo no puede estar vacio";
    }
    if ($platos == []) {
        $error[6] = "Error, el plato no puede estar vacio";
    }


    if (count($error) == 0) {
        if (!isset($id)) {
            $pasatiempos = implode(", ", $pasatiempos) . "\n";
            $platos = implode(", ", $platos) . "\n";
            $sql = "INSERT INTO usuario (nombre,contrasena,comentario,idioma,estado,pasatiempos,platos,id_cat) 
        VALUES ('$nombre','$contraseña','$comentario','$idioma','$estadocivil','$pasatiempos','$platos','$categoria')";
            if ($conexion->query($sql) === true) {
                echo "Datos Agregados correctamente";
                header("Location: listar.php");
            } else {
                echo "Error " . $sql . "<br>" . $conexion->error;
            }
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
    <style>
        .error {
            color: red;
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="formulario1.php" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="control-label">Nombre: </label>
                        <input type="text" name="nombre" class="form-control" value="<?php if (isset($data)) {
                                                                                            echo $data['nombre'];
                                                                                        } ?>">
                        <?php (isset($error[0])) ? print "<p class='error'>" . $error[0] . "</p>" : ""; ?>
                    </div>
                    <div class="mb-3">
                        <label for="contraseña" class="control-label">Contraseña: </label>
                        <input type="password" name="contraseña" class="form-control" value="<?php if (isset($data)) {
                                                                                                    echo $data['contrasena'];
                                                                                                } ?>">
                        <?php (isset($error[1])) ? print "<p class='error'>" . $error[1] . "</p>" : ""; ?>

                    </div>
                    <div class="mb-3">
                        <label for="comentario">Comentario: </label>
                        <textarea name="comentario" cols="30" rows="10" class="form-control"><?php if (isset($data)) {
                                                                                                    echo $data['comentario'];
                                                                                                } ?></textarea>
                        <?php (isset($error[2])) ? print "<p class='error'>" . $error[2] . "</p>" : ""; ?>

                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="Idioma">Idioma</label>
                        <select class="form-select" name="Idioma">
                            <?php
                            foreach ($idioma_array as $key => $value) {
                                if ($data['idioma'] == $value) {
                                    echo "<option value='$value' selected>$value</option>";
                                } else {
                                    echo "<option value='$value'>$value</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="EstadoCi" class="control-label">Estado Civil:</label>
                        <div class="mb-3" name="EstadoCi">
                            <input class="form-check-input" type="radio" name="Estado" value="Casado" <?php if (isset($data)) {
                                                                                                            if ($data['estado'] == "Casado") {
                                                                                                                echo "checked";
                                                                                                            }
                                                                                                        }
                                                                                                        ?>>
                            <label class="form-check-label" for="Casado">
                                Casado
                            </label>
                            <input class="form-check-input" type="radio" name="Estado" value="Soltero" <?php
                                                                                                        if (isset($data)) {
                                                                                                            if ($data['estado'] == "Soltero") {
                                                                                                                echo "checked";
                                                                                                            }
                                                                                                        }
                                                                                                        ?>>
                            <label class="form-check-label" for="Soltero">
                                Soltero
                            </label>
                            <input class="form-check-input" type="radio" name="Estado" value="Divorciado" <?php
                                                                                                            if (isset($data)) {
                                                                                                                if ($data['estado'] == "Divorciado") {
                                                                                                                    echo "checked";
                                                                                                                }
                                                                                                            }
                                                                                                            ?>>
                            <label class="form-check-label" for="divorciado">
                                Divorciado
                            </label>
                            <input class="form-check-input" type="radio" name="Estado" value="Viudo" <?php
                                                                                                        if (isset($data)) {
                                                                                                            if ($data['estado'] == "Viudo") {
                                                                                                                echo "checked";
                                                                                                            }
                                                                                                        }
                                                                                                        ?>>
                            <label class="form-check-label" for="Viudo">
                                Viudo
                            </label>
                        </div>
                        <?php (isset($error[4])) ? print "<p class='error'>" . $error[4] . "</p>" : ""; ?>

                    </div>
                    <div class="mb-3">
                        <label class="control-label">Pasatiempos:</label>
                        <div class="mb-3">
                            <label for="pasatiempos" class="control-label">
                                <input type="checkbox" name="pasatiempo[]" value="Jugar" class="form-check-input" <?php
                                                                                                                    if (isset($data)) {
                                                                                                                        if (strpos($data['pasatiempos'], "Jugar") !== false) {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                    }
                                                                                                                    ?>>Jugar
                            </label>
                            <label for="pasatiempos" class="control-label">
                                <input type="checkbox" name="pasatiempo[]" value="Dormir" class="form-check-input" <?php
                                                                                                                    if (isset($data)) {
                                                                                                                        if (strpos($data['pasatiempos'], "Dormir") !== false) {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                    }
                                                                                                                    ?>>Dormir
                            </label>
                            <label for="pasatiempos" class="control-label">
                                <input type="checkbox" name="pasatiempo[]" value="Leer" class="form-check-input" <?php
                                                                                                                    if (isset($data)) {
                                                                                                                        if (strpos($data['pasatiempos'], "Leer") !== false) {
                                                                                                                            echo "checked";
                                                                                                                        }
                                                                                                                    }
                                                                                                                    ?>>Leer
                            </label>

                            <label for="pasatiempos" class="control-label">
                                <input type="checkbox" name="pasatiempo[]" value="Cantar" <?php
                                                                                            if (isset($data)) {
                                                                                                if (strpos($data['pasatiempos'], "Cantar") !== false) {
                                                                                                    echo "checked";
                                                                                                }
                                                                                            }
                                                                                            ?>>Cantar
                            </label>
                        </div>
                        <?php (isset($error[5])) ? print "<p class='error'>" . $error[5] . "</p>" : ""; ?>

                    </div>
                    <div class="mb-3">
                        <label class="control-label">Platos Favoritos:</label>
                        <div class="mb-3">
                            <label for="pasatiempos" class="form-check-label">
                                <input type="checkbox" name="platos[]" value="Saice" class="form-check-input" <?php
                                                                                                                if (isset($data)) {
                                                                                                                    if (strpos($data['platos'], "Saice") !== false) {
                                                                                                                        echo "checked";
                                                                                                                    }
                                                                                                                }
                                                                                                                ?>>Saice </label>
                            <label for="pasatiempos" class="form-check-label">
                                <input type="checkbox" name="platos[]" value="Picante" class="form-check-input" <?php
                                                                                                                if (isset($data)) {
                                                                                                                    if (strpos($data['platos'], "Picante") !== false) {
                                                                                                                        echo "checked";
                                                                                                                    }
                                                                                                                }
                                                                                                                ?>>Picante
                            </label>
                            <label for="pasatiempos" class="form-check-label">
                                <input type="checkbox" name="platos[]" value="Ranga" class="form-check-input" <?php
                                                                                                                if (isset($data)) {
                                                                                                                    if (strpos($data['platos'], "Ranga") !== false) {
                                                                                                                        echo "checked";
                                                                                                                    }
                                                                                                                }
                                                                                                                ?>>Ranga </label>

                            <label for="pasatiempos" class="form-check-label">
                                <input type="checkbox" name="platos[]" value="Sopita" class="form-check-input" <?php
                                                                                                                if (isset($data)) {
                                                                                                                    if (strpos($data['platos'], "Sopita") !== false) {
                                                                                                                        echo "checked";
                                                                                                                    }
                                                                                                                }
                                                                                                                ?>>Sopita
                            </label>
                        </div>
                    </div>
                    <?php (isset($error[6])) ? print "<p class='error'>" . $error[6] . "</p>" : ""; ?>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="Categoria">Categoria</label>
                        <select class="form-select" name="Categoria">
                            <?php
                            while ($row = mysqli_fetch_array($r2)) {
                                if ($data['categoria'] == $row['nombre_c']) {
                                    echo "<option value='$row[id]' selected>$row[nombre_c]</option>";
                                } else {
                                    echo "<option value='$row[id]'>$row[nombre_c]</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
            </div>
            <div class="mb-3">
                <input type="hidden" name="bandera" id="bandera" value="bandera">
                <div class="btn-group" role="group" aria-label="">
                    <a href="listar.php" class="btn btn-secondary">Atras</a>
                </div>
                <input type="submit" value="Enviar" class="btn btn-primary">

            </div>
            </form>
        </div>
    </div>

</body>

</html>