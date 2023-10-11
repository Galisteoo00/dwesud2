<?php
$a = 5;
$b = 2;
$c = 8;

if ($a <= $b && $a <= $c) {
    if ($b <= $c) {
        echo "Los números ordenados de menor a mayor son: $a, $b, $c";
    } else {
        echo "Los números ordenados de menor a mayor son: $a, $c, $b";
    }

} elseif ($b <= $a && $b <= $c) {
    if ($a <= $c) {
        echo "Los números ordenados de menor a mayor son: $b, $a, $c";
    } else {
        echo "Los números ordenados de menor a mayor son: $b, $c, $a";
    }
} else {
    if ($a <= $b) {
        echo "Los números ordenados de menor a mayor son: $c, $a, $b";
    } else {
        echo "Los números ordenados de menor a mayor son: $c, $b, $a";
    }
}
?>
