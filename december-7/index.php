<?php

$n = 3;
$k = 8;
$s = 0;

for ($i = 0; $i < $n; $i++) {
    $seatsInRow = $k + ($i * 2);
    $s += $seatsInRow;
}

echo "Total seats Santa must order: $s";

?>