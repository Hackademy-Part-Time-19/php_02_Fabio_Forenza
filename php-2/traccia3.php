<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0) {
        echo 'PHP ';
    } elseif ($i % 5 === 0) {
        echo 'JAVASCRIPT ';
    } elseif ($i % 3 === 0 && $i % 5 === 0) {
        echo 'HACKADEMY ';
    } else {
        echo $i . ' ';
    }
}
