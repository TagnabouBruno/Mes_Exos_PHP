<?php

echo "Entrez un entier X : ";
$x = readline();

if (!is_numeric($x) || $x <= 0 || floor($x) != $x) {
    echo "Veuillez entrer un entier positif valide.";
    exit;
}

$diviseurs = array();
for ($i = 1; $i <= $x; $i++) {
    if ($x % $i == 0) {
        $diviseurs[] = $i;
    }
}

echo "Les diviseurs de $x sont : ";
foreach ($diviseurs as $diviseur) {
    echo "$diviseur ";
}

?>
