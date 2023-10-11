<?php
$nombre = "Juan";
$edad = 30;

$texto = <<<FIN
¡Hola $nombre!
Tienes $edad años de edad.
Bienvenido al sistema.
FIN;

echo $texto;
?>