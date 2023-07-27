<?php
include("conectar.php");
$sql = "SELECT * FROM vacuna";
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
    <div class="row">
        <div class="col-sm-6">
            <h3>Lista de Vacunas</h3>
            <div class="col-sm-3">
                <a href="formulario2.php" class="btn btn-success">Agregar</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Fecha</th>
                        <th>Sexo</th>
                        <th>Vacuna</th>
                        <th>Tipo</th>
                        <th>Dosis</th>
                        <th>Medios</th>
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
                            <td><?php echo $row['correo']; ?></td>
                            <td><?php echo $row['fecha']; ?></td>
                            <td><?php echo $row['sexo']; ?></td>
                            <td><?php echo $row['vacuna']; ?></td>
                            <td><?php echo $row['tipo']; ?></td>
                            <td><?php echo $row['dosis']; ?></td>
                            <td><?php echo $row['medios']; ?></td>
                            <td>
                                <a href="modificar2.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Modificar</a>
                                <a href="eliminar2.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
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