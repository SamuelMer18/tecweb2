<?php
$mensaje = $_GET['mensaje'];
$nombre = $_GET['nombre'];
//en esta parte del codigo embedido se puede poner codigo html
echo "<h2> $mensaje</h2>";
echo "<h3> $nombre </h3>";
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
echo "<h3> El numero 1 es: $numero1 y el numero 2 es $numero2</h3>";
echo "<h3> La suma es :" . ($numero1 + $numero2) . "</h3>";
echo "<h3> La resta es :" . ($numero1 - $numero2) . "</h3>";
echo "<h3> La multiplicacion es :" . ($numero1 * $numero2) . "</h3>";
echo "<h3> La division es :" . ($numero1 / $numero2) . "</h3>";
echo "<h3> El mayor es: " . (($numero1 > $numero2) ? $numero1 : $numero2) . "</h3>";
echo "<h3>El menor es: " . (($numero1 < $numero2) ? $numero1 : $numero2) . "</h3>";
