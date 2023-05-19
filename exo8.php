<?php

function estPremier($nombre)
{
    if ($nombre < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($nombre); $i++) {
        if ($nombre % $i == 0) {
            return false;
        }
    }

    return true;
}

$nombre = readline("Entrez un nombre entier : ");

if (estPremier($nombre)) {
    echo "$nombre est un nombre premier.";
} else {
    echo "$nombre n'est pas un nombre premier.";
}

?>
