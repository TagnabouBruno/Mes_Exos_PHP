<?php
echo "Entrez la valeur de A : ";
$A = readline();

echo "Entrez la valeur de B : ";
$B = readline();

if ($B != 0) {
    $quotient = 0;
    $reste = abs($A);
    while ($reste >= abs($B)) {
        $reste -= abs($B);
        $quotient++;
    }
    
    if (($A < 0 && $B > 0) || ($A > 0 && $B < 0)) {
        $quotient = -$quotient;
    }

    echo "Quotient : " . $quotient . "\n";
    echo "Reste : " . $reste . "\n";
} else {
    echo "Erreur : division par zéro !\n";
}

?>
