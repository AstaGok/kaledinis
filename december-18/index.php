<?php

$stores = [
    [1.07, 2.92, 3.45, 1.09, 0.89],
    [1.08, 2.35, 3.75, 1.12, 0.69],
    [0.98, 2.48, 3.62, 1.10, 0.72]
];

$totalSpentInAllStores = 0;
$storeNumber = 1;

foreach ($stores as $items) {
    $itemCount = 0;
    $totalSpent = 0;

    foreach ($items as $price) {
        $totalSpent = $totalSpent + $price;
        $itemCount = $itemCount + 1;
    }

    $totalSpentInAllStores = $totalSpentInAllStores + $totalSpent;
    echo $storeNumber . " " . $itemCount . " " . round($totalSpent, 2) . "<br>";
    $storeNumber = $storeNumber + 1;
}

echo round($totalSpentInAllStores, 2) . "<br>";

?>