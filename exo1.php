<?php
$N = intval(readline("Entrez un entier N : "));
$somme = 0;
for ($i = 1; $i <= $N; $i++) {
    $somme += $i;
}
echo "La somme des $N premiers nombres entiers est : $somme";
?>
