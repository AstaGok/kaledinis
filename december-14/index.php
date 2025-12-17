<?php
$cart = array();
$promo_codes = array(
    "PROMO10" => 0.10,
    "PROMO25" => 0.25,
    "SANTA50" => 0.50
);

$current_discount = 0;

echo "<h2>Santos krepšelio sistema</h2>";

$gift_id = "train";
$gift_price = 30;

if (!isset($cart[$gift_id])) {
    $cart[$gift_id] = $gift_price;
    echo "Pridėta: $gift_id - $gift_price lazdelių.<br>";
}

$gift_id = "doll";
$gift_price = 20;

if (!isset($cart[$gift_id])) {
    $cart[$gift_id] = $gift_price;
    echo "Pridėta: $gift_id - $gift_price lazdelių.<br>";
}

$code = "PROMO10";

if (isset($promo_codes[$code])) {
    $current_discount = $promo_codes[$code];
    echo "Pritaikytas kodas: $code (nuolaida " . ($current_discount * 100) . "%)<br>";
}

$suma = array_sum($cart);
$galutine_suma = $suma - ($suma * $current_discount);

echo "<h3>Galutinė suma dabar: $galutine_suma lazdelių</h3>";

unset($cart["train"]);
echo "Pašalinta: train<br>";

$suma = array_sum($cart);
$galutine_suma = $suma - ($suma * $current_discount);

echo "<h3>Galutinė suma po pakeitimo: $galutine_suma lazdelių</h3>";
?>
