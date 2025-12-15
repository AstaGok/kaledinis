<?php
$N = 6;

for ($i = 0; $i < 15; $i++) {
    echo "#";
}
echo "<br>";

for ($row = 1; $row <= $N; $row++) {

    echo "# ";

    for ($col = 1; $col <= $N; $col++) {

        $sum = $row + $col;

        if ($sum % 3 == 0 && $sum % 5 == 0) {
            echo "G ";
        } elseif ($sum % 3 == 0) {
            echo "T ";
        } elseif ($sum % 5 == 0) {
            echo "S ";
        } else {
            echo ". ";
        }
    }

    echo "#<br>";
}

for ($i = 0; $i < 15; $i++) {
    echo "#";
}
?>