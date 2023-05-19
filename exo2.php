<?php
echo "Entrez le nombre d'éléments : ";
$n = intval(readline());
$min = PHP_INT_MAX;
$max = PHP_INT_MIN;
for ($i = 1; $i <= $n; $i++) {
    echo "Entrez le nombre $i : ";
    $nombre = intval(readline());
    
    if ($nombre < $min) {
        $min = $nombre;
    }

    if ($nombre > $max) {
        $max = $nombre;
    }
}

// Affiche le minimum et le maximum
echo "Le minimum est : $min\n";
echo "Le maximum est : $max\n";
?>
