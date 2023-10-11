<?php
$mes=10;
$año=2022;

switch ($mes) {
    case 1 or 3 or 5 or 7 or 8 or 10 or 12:
        echo "El mes $mes tiene 31 días";
        break;
    case 4 or 6 or 9 or 11:
        echo "El mes $mes tiene 30 días";
        break;
    case 2:
        if ($año % 4 == 0 and $año % 100 != 0) {
            echo "El mes $mes tiene 29 días";
        } else {
            echo "El mes $mes tiene 28 días";
        }
        break;
    default:
        echo "Mes inválido";
}
?>


