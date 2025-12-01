
<?php
$length = 5;
$width = 5;
$m2price = 10;

$area = $length * $width;
$totalArea = $area * 1.05;
$totalCost = $totalArea * $m2price;

echo "Santa must pay: " . $totalCost . " coins.";
?>