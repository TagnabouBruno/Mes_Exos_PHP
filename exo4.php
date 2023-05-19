<?php
echo "Entrez le premier entier : ";
$entier1 = readline();

echo "Entrez le deuxième entier : ";
$entier2 = readline();

$resultat = 0;

for ($i = 0; $i < $entier2; $i++) {
    $resultat += $entier1;
}

echo "Le produit est : " . $resultat;
?>
