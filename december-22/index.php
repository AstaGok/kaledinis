<?php
echo "<pre>";

$originalusTekstas = [
    "Ei,",
    "drauguži, žiemos",
    "vidury",
    "Roges",
    "jei turi,",
    "tai gerai!",
    "Į",
    "kalną aukščiausią,",
    "patį balčiausią",
    "Įkopt",
    "jei gali,",
    "tai gerai!"
];

$maxIlgis = 0;
foreach ($originalusTekstas as $eilute) {
    $ilgis = mb_strlen($eilute);
    if ($ilgis > $maxIlgis) {
        $maxIlgis = $ilgis;
    }
}

foreach ($originalusTekstas as $indeksas => $eilute) {
    $dabartinisIlgis = mb_strlen($eilute);
    
    if ($indeksas % 2 == 0) {
        echo str_repeat(" ", $maxIlgis) . $eilute . "\n";
    } else {
        echo str_repeat(" ", $maxIlgis - $dabartinisIlgis) . $eilute . "\n";
    }
}

echo "</pre>";
?>