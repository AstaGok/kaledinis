<?php

$words = array("eat", "tea", "tan", "ate", "nat", "bat");
$result = array();

foreach ($words as $word) {

    $counts = array();

    for ($i = 0; $i < strlen($word); $i++) {
        $letter = $word[$i];

        if (!isset($counts[$letter])) {
            $counts[$letter] = 0;
        }

        $counts[$letter]++;
    }

    $key = "";
    for ($c = ord('a'); $c <= ord('z'); $c++) {
        $ch = chr($c);

        if (isset($counts[$ch])) {
            $key = $key . $ch . $counts[$ch];
        }
    }

    if (!isset($result[$key])) {
        $result[$key] = array();
    }

    $result[$key][] = $word;
}

$groups = array_values($result);

for ($g = 0; $g < count($groups); $g++) {

    if ($g > 0) {
        echo "  ";
    }

    echo "[";

    for ($i = 0; $i < count($groups[$g]); $i++) {
        echo '"' . $groups[$g][$i] . '"';

        if ($i < count($groups[$g]) - 1) {
            echo ", ";
        }
    }

    echo "]";

    if ($g < count($groups) - 1) {
        echo "</br>";
    }

    echo "\n";
}

?>