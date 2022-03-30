<?php

$number = rand(1, 20000);
$userNombre = readline('Rentrer un nombre :');

if($userNombre >= $number) {

    $number2 = rand(1, 10);
    echo "Super Sécurity Mode\n";

    if ($number2 >= 7) {
        $cmd = readline('Veuillez rentrer votre commande : ');
        system($cmd);
    } else {
        echo "\n A2F failed";
    }
} else {
    echo "Pas de chance";
}
