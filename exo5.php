<?php

echo "Entrez un entier : ";
$nombre = intval(readline());

if ($nombre >= 0) {
    $binaire = decbin($nombre);
    
    echo "Le binaire de $nombre est : $binaire";
} else {
    echo "Veuillez entrer un entier positif.";
}

?>
