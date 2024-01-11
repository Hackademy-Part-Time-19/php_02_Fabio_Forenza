<?php

$users = [
    ['name' => 'Alessio', 'surname' => 'Rossi', 'gender' => 'M'],
    ['name' => 'Taylor', 'surname' => 'Avery', 'gender' => 'NB'],
    ['name' => 'Francesca', 'surname' => 'De Luca', 'gender' => 'F'],
    ['name' => 'Riley', 'surname' => 'Morgan', 'gender' => 'NB'],
    ['name' => 'Sofia', 'surname' => 'Romano', 'gender' => 'F'],
    ['name' => 'Jamie', 'surname' => 'Riley', 'gender' => 'NB'],
    ['name' => 'Luca', 'surname' => 'Ferrari', 'gender' => 'M'],
    ['name' => 'Quinn', 'surname' => 'Morgan', 'gender' => 'NB'],
    ['name' => 'Alex', 'surname' => 'Taylor', 'gender' => 'NB'],
    ['name' => 'Sara', 'surname' => 'Ferri', 'gender' => 'F']
];

//svolto usando la formula if elseif else 

foreach ($users as $user) {
    $nomeCompleto = $user['name'] . ' ' . $user['surname'];
    if ($user['gender'] === 'M') {
        echo "Buongiorno Sig. $nomeCompleto \n";
    } elseif ($user['gender'] === 'F') {
        echo "Buongiorno Sig.ra $nomeCompleto \n";
    } else {
        echo "Buongiorno $nomeCompleto \n";
    }
}

//svolto utilizzando la formula dello switch

foreach ($users as $user) {
    $nomeCompleto = $user['name'] . ' ' . $user['surname'];
    switch ($user['gender']) {
        case 'M':
            echo "Buongiorno Sig. $nomeCompleto \n";
            break;
        case 'F':
            echo "Buongiorno Sig.ra $nomeCompleto \n";
            break;
        default:
            echo "Buongiorno $nomeCompleto \n";
            break;
    }
}
