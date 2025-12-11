<?php
$a = 23;
$b = 55;
$c = 14;

$startTime = $a * 60 + $b;

$landingTime = $startTime + $c;

$v = ($landingTime / 60) % 24; 

$m = $landingTime % 60;

echo "Santa lands at: $v hours and $m minutes";
?>