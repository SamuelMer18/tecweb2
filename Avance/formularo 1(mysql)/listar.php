<?php
include("conectar.php");
$sql = "SELECT usuario.*, categoria.nombre_c as categoria 
FROM usuario INNER JOIN categoria ON usuario.id_cat = categoria.id";
$r = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Lista de Usuarios</h3>
                <a href="formulario1.php" class="btn btn-success">Agregar</a>
            </div>
        </div>
        <br>
        <div class="row">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Contraseña</th>
                        <th>Comentario</th>
                        <th>Idioma</th>
                        <th>Estado</th>
                        <th>Pasatiempos</th>
                        <th>Platos</th>
                        <th>Categoria</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($r)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['contrasena']; ?></td>
                            <td><?php echo $row['comentario']; ?></td>
                            <td><?php echo $row['idioma']; ?></td>
                            <td><?php echo $row['estado']; ?></td>
                            <td><?php echo $row['pasatiempos']; ?></td>
                            <td><?php echo $row['platos']; ?></td>
                            <td><?php echo $row['categoria']; ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="">
                                    <a href="modificar.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Modificar</a>
                                    <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
                                </div>

                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
            mysqli_close($conexion);
            ?>
        </div>
    </div>
</body>

</html>