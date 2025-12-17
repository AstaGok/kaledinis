<?php

$students = array(
    "Petraitis Rokas",
    "Augė Artūras",
    "Mikalauskaitė Aušra",
    "Šlivka Donatas",
    "Stakėnaitė Ieva",
    "Skrėbė Domas",
    "Bruzgaitė Akvilė"
);

$girls = array();

foreach ($students as $student) {

    $parts = explode(" ", $student);
    $firstName = $parts[1];

    $lastLetter = mb_substr($firstName, -1, 1,);

    if ($lastLetter == "a" || $lastLetter == "ė") {
        $girls[] = $student;
    }
}

echo count($girls) . "<br>";

foreach ($girls as $girl) {
    echo $girl . "<br>";
}

?>