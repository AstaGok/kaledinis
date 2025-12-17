<?php

$x = 10.50;
$y = 7.24;
$z = 12.00;

if ($x <= $y && $x <= $z) {
    $rezultatas = $x;
} elseif ($y <= $x && $y <= $z) {
    $rezultatas = $y;
} else {
    $rezultatas = $z;
}

$formatuotas_skaicius = number_format($rezultatas, 2, '.', '');

echo "Peteris išleis " . $formatuotas_skaicius;
?>