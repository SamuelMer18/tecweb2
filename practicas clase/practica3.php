<?php
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];


echo "<h3> Nombre:$nombre</h3>";
echo "<h3> Apellido:$apellido</h3>";
echo "<h3> Edad:$edad</h3>";
if ($edad >= 18) {
    $hobby = $_GET['hobby'];
    echo "<h3> Hobby:$hobby</h3>";
    $color = $_GET['color'];
    echo "<h3> Color:$color</h3>";
} else {
    $deporte = $_GET['deporte'];
    echo "<h3> Deporte:$deporte</h3>";
    echo "<h3> Es menor de edad</h3>";
}

// localhost/tecweb2/ejercicio2.php?nombre=juan&apellido=lopez&edad=18&hobby=programar&color=rojo
// localhost/tecweb2/ejercicio2.php?nombre=juan&apellido=lopez&edad=16&deporte=futbol