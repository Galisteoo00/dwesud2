<?php
$radio = 20; 
define("PI", 3.14);
$area = PI * ($radio ** 2);
$longitudCircunferencia = 2 * PI * $radio;
?>
  <p><strong>Radio:</strong> <?php echo $radio; ?></p>
    <p><strong>Longitud de la Circunferencia:</strong> <?php echo $longitudCircunferencia; ?></p>
    <p><strong>Área del Círculo:</strong> <?php echo $area; ?></p>

    <h2>Dibujo del Círculo:</h2>
    <svg width="200" height="200">
        <circle cx="100" cy="100" r="<?php echo $radio; ?>" fill="blue" stroke="black" stroke-width="2" />
    </svg>
