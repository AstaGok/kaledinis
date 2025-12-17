<?php
$juiceAmounts = [45, 92, 33];

foreach ($juiceAmounts as $liters) {
    
    $remaining = $liters;
    $fiveL = (int)($remaining / 5);
    $remaining = $remaining % 5;
    $twoL = (int)($remaining / 2);
    $remaining = $remaining % 2; 
    $oneL = $remaining;
    echo "$fiveL $twoL $oneL <br>";
}
?>