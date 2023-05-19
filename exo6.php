<?php

$A = readline("Entrez la valeur de A : ");
$B = readline("Entrez la valeur de B : ");

if ($A % $B === 0) {
    echo $A . " est divisible par " . $B . ".";
} else {
    echo $A . " n'est pas divisible par " . $B . ".";
}

?>
