<?php
$workshops = [
  [5, 7, 3],
  [6, 4, 4, 5],
  [10, 2]
];

$total_gifts = 0;
$workshop_number = 1;

foreach ($workshops as $current_workshop) {
    
    $workshop_sum = 0;
    
    foreach ($current_workshop as $elf_gifts) {
        $workshop_sum = $workshop_sum + $elf_gifts;
    }
    
    echo "Workshop $workshop_number made $workshop_sum gifts<br>";
    
    $total_gifts = $total_gifts + $workshop_sum;
    
    $workshop_number++;
}

echo "<strong>Santa’s total gift count is $total_gifts</strong>";
?>