<?php

$temperatura = [
    'Venezia' => 16, 'Bari' => 32, 'Roma' => 28, 'Napoli' => 28, 'Milano' => 28, 'Palermo' => 28,
    'Torino' => 28, 'Lecce' => 28, 'Genova' => 28, 'Catania' => 28, 'Cosenza' => 28
];

foreach ($temperatura as $key => $value) {
    if ($value < 15) {
        echo "A $key fa freddo con $value °C \n";
    } elseif ($value >= 15 && $value <= 25) {
        echo "A $key fa caldo con $value °C \n";
    } else {
        echo "A $key fa veramente caldo con $value °C \n";
    }
}
