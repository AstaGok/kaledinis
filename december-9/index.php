<?php
$n = 4;
$a = array(4, 3, 7, 8);

$sum = 0;

for ($i = 0; $i < $n; $i++) {
    $sum = $sum + $a[$i];
}


$avg = $sum / $n;


$index = 0;
$diff = abs($a[0] - $avg);

for ($i = 1; $i < $n; $i++) {
    if (abs($a[$i] - $avg) < $diff) {
        $diff = abs($a[$i] - $avg);
        $index = $i;
    }
}

echo ($index + 1) . " " . number_format($avg, 2);
?>