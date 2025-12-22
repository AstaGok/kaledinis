<?php

$priceList = [
    "London" => 0.50,
    "Paris" => 0.40,
    "NewYork" => 0.70
];

$elves = [
    [
        "firstName" => "Jingle",
        "lastName" => "Sparkfoot",
        "calls" => [
            ["city" => "London", "minutes" => 12],
            ["city" => "Paris", "minutes" => 7]
        ]
    ],
    [
        "firstName" => "Twinkle",
        "lastName" => "Icicletoes",
        "calls" => [
            ["city" => "NewYork", "minutes" => 20],
            ["city" => "London", "minutes" => 5]
        ]
    ],
    [
        "firstName" => "Pudding",
        "lastName" => "Gumdrops",
        "calls" => [
            ["city" => "Paris", "minutes" => 15]
        ]
    ]
];

usort($elves, function($a, $b) {
    return $a['lastName'] <=> $b['lastName'];
});

$totalCollected = 0;

foreach ($elves as $elf) {
    $elfCost = 0;

    foreach ($elf['calls'] as $call) {
        $city = $call['city'];
        $minutes = $call['minutes'];
        
        $pricePerMinute = $priceList[$city];
        $elfCost += $minutes * $pricePerMinute;
    }

    $totalCollected += $elfCost;

    echo $elf['lastName'] . " " . $elf['firstName'] . " " . number_format($elfCost, 2) . "<br>";
}

echo "Total: " . number_format($totalCollected, 2);
?>