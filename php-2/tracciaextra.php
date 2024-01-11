<?php

$numeri_casuali = [];

for ($i = 0; $i < 4; $i++) {
    $array_interno = [];
    for ($j = 0; $j < 5; $j++) {
        $array_interno[] = rand(1, 100);
    }
    $numeri_casuali = $array_interno;
    var_dump($numeri_casuali);
}
