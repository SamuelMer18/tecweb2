<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$db = "formulariovacuna";
$conexion = mysqli_connect($host, $usuario, $clave, $db);
if (mysqli_connect_error()) {
    echo "Error al conectar con la base de datos";
} else {
    echo "Conectado";
}
