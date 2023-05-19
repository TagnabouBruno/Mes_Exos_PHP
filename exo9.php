<?php

function calculerSommeChiffres($nombre) {
    $somme = 0;
    $chiffres = str_split($nombre);

    foreach ($chiffres as $chiffre) {
        $somme += intval($chiffre); 
    }

    return $somme;
}

$nombre = 12345;
$sommeChiffres = calculerSommeChiffres($nombre);
echo "La somme des chiffres de $nombre est : $sommeChiffres";

?>
