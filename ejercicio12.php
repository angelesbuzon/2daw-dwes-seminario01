<?php

# Ejercicio 12. Número capicúa
# Crea una función que determine si un número dado es capicúa.
# Nota: Un número capicúa es aquel que se lee igual de izquierda a derecha que de derecha a izquierda, por ejemplo: 121, 1331, 45654.

include "./includes/funciones.php";

$n = promptInteger("Introduce un número: ");

if (isPalindromicNumber($n)) {
    echo "Es un número bonito porque es capicúa :)\n";
} else {
    echo "No es capicúa :(\n";
}

function isPalindromicNumber(int $n): bool {
    $nString = (string)$n;

    return (isPalindrome($nString));
}

?>