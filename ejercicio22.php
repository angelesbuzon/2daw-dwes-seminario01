<?php

# Ejercicio 22. Número perfecto
# Crea una función que, dado un número,
# devuelva true si es un número perfecto
# (la suma de sus divisores propios positivos es igual al número)
# o false en caso contrario.
# Ejemplo: 6 es un número perfecto porque sus divisores propios son 1, 2 y 3, y 1 + 2 + 3 = 6.

include './includes/funciones.php';

$n = promptInteger("Introduce un número: ");

if (isPerfectNumber($n)) {
    echo "Pues resulta que es un número perfecto :)\n";
} else {
    echo "Pues OK.\n";
}

# Forma de mejorarlo luego si me apetece: devolver también lista de divisores y agregarlo al echo

function isPerfectNumber(int $n): bool {
    # 1. Encontrar divisores (redondos) del número, incluido 1 pero no a sí mismo
    # 2. Sumarlos
    $sum = 1;

    for ($i = 2; $i < $n; $i++) {
        if ($n % $i === 0) {
            $sum += $i;
        }
    }

    # 3. Comprobar si la suma equivale al número
    if ($sum === $n) return true;
    else return false;
}

?>