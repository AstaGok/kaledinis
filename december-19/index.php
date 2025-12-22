<?php

$n = 17;
$input = "5 12 6 7 13 7 9 10 12 17 5 16 2 2 5 4 6";
$toys = explode(" ", $input);
$counts = array();

for ($i = 1; $i <= 100; $i++) {
    $counts[$i] = 0;
}

foreach ($toys as $toy) {
    $toyNumber = (int)$toy;
    $counts[$toyNumber]++;
}

$tradeList = array();
for ($i = 1; $i <= 100; $i++) {
    if ($counts[$i] > 1) {
        $tradeList[] = $i;
    }
}

echo implode(" ", $tradeList);
?>