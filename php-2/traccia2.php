<?php

$numeri = [23, 45, 12, 67, 89, 34, 56, 78, 90, 108, 21, 46, 75, 32, 59, 14, 37, 64, 92];

$numeri_pari = 0;
$count_numeri = 0;

for ($i = 0; $i < count($numeri); $i++) {
    if ($numeri[$i] % 2 === 0) {

        $numeri_pari += $numeri[$i];

        $count_numeri++;
    }
}


if ($count_numeri > 0) {
    $media = $numeri_pari / $count_numeri;
    echo "La media dei numeri pari è $media";
} else {
    echo 'In questo array non esistono numeri pari';
}
