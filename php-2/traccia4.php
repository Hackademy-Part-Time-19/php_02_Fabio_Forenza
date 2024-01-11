<?php

$temperatura = 8;



if ($temperatura < 15) {
    echo "Fa freddo";
} elseif ($temperatura >= 15 && $temperatura <= 25) {
    echo "Fa caldo";
} else {
    echo "Fa veramente caldo";
}
