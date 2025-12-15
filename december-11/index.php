<?php

$xc = 5;
$yc = 5;
$r1 = 1;
$r2 = 2;
$r3 = 3;

$p1 = 10;
$p2 = 5;
$p3 = 2;

$x = 6;
$y = 5;

$dx = $x - $xc;
$dy = $y - $yc;
$distance = sqrt($dx*$dx + $dy*$dy);

$points = 0;

if ($distance < $r1) {
    $points = $p1;
} elseif ($distance == $r1) {
    $points = $p1 / 2;
} elseif ($distance < $r2) {
    $points = $p2;
} elseif ($distance == $r2) {
    $points = $p2 / 2;
} elseif ($distance < $r3) {
    $points = $p3;
} elseif ($distance == $r3) {
    $points = $p3 / 2;
} else {
    $points = 0;
}

echo "Santa score: $points";
?>