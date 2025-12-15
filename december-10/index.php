<?php

$h = 3;
$m = 15;

$m += 60;

if ($m >= 60) {
    $h += intdiv($m, 60);
    $m = $m % 60;
}

$h = $h % 24;

echo "Laikas po pilno minutės rankos apsisukimo: $h:$m";
?>