<?php

# Ejercicio 20. Factorial
# Crea una función que calcule el factorial de un número.
# Nota: El factorial de un número n (representado como n!) es el producto de todos los
# números enteros positivos desde 1 hasta n. Por ejemplo, 5! = 5 × 4 × 3 × 2 × 1 = 120

include './includes/funciones.php';

$n = promptInteger("Introduce un entero: ");

$factorial = factorial($n);

echo $n . "! = " . $factorial . "\n";

function factorial(int $n): int {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}


?>