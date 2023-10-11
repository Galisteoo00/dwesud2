<!DOCTYPE html>
<html>
<head>
    <title>Estaciones del Año</title>
</head>
<body>

<?php
$mes = 8;
$dia = 22;

$estaciones = array(
    array("Primavera", "green"),
    array("Verano", "yellow"),
    array("Otoño", "orange"),
    array("Invierno", "blue")
);

if (isset($_POST['cambiarEstacion'])) {
    // Genera una estación aleatoria
    $estacionAleatoria = $estaciones[array_rand($estaciones)];
    $estacion = $estacionAleatoria[0];
    $color_fondo = $estacionAleatoria[1];
} else {
    if (($mes == 3 && $dia >= 20) || ($mes == 4) || ($mes == 5) || ($mes == 6 && $dia < 21)) {
        $estacion = "Primavera";
        $color_fondo = "green";
    } elseif (($mes == 6 && $dia >= 21) || ($mes == 7) || ($mes == 8) || ($mes == 9 && $dia < 23)) {
        $estacion = "Verano";
        $color_fondo = "yellow";
    } elseif (($mes == 9 && $dia >= 23) || ($mes == 10) || ($mes == 11) || ($mes == 12 && $dia < 21)) {
        $estacion = "Otoño";
        $color_fondo = "orange";
    } else {
        $estacion = "Invierno";
        $color_fondo = "blue";
    }
}
?>

<h1>Estación del Año: <?php echo $estacion; ?></h1>
<form method="post">
    <input type="submit" name="cambiarEstacion" value="Cambiar Estación">
</form>
<body style="background-color: <?php echo $color_fondo; ?>;">

</body>
</html>
