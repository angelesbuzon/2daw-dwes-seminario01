<?php

# Ejercicio 18. Número primo
# Crea una función que determine si un número es primo
# Nota: Un número primo es un número natural mayor que 1 que solo es divisible por 1 y por sí mismo.

include './includes/funciones.php';

$number = promptNumber("Introduce un número: ");

# var_dump($number);

if (isPrime($number)) {
    echo "El número " . $number . " es primo :)\n";
} else {
    echo "El número " . $number . " NO es primo :(\n";
}


function isPrime($number) {
    $prime = true;

    for ($i = 2; $i < ($number / 2) && $prime; $i++) {
        # var_dump($i);

        if ($number % $i === 0) {
            $prime = false;
        }
    }

    return $prime;
};

?>