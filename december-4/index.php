

<?php
$prices = [5.6, 6.7, 12.3, 15.7, 0];

$total = 0;
$count = 0;

foreach ($prices as $price) {
    if ($price == 0) {
        break;
    }

    if ($price > 10) {
        $total = $total + $price;
        $count = $count + 1;
    }
}

echo "Total price of magical toys: $total EUR\n";
echo "Number of magical toys: $count\n";
?>