<?php
# Ejercicio 1. Número máximo de un array
# Crea una función que obtenga el número máximo de un array de números.

$numbers = [];
$n;
$isPrompting = true;

do {
    $n = readline("Introduce un número cualquiera (o 0 para parar el bucle): ");

    if (!is_numeric($n)) {
        echo "ERROR: Solo puedes introducir números (usa punto en vez de coma para decimales).\n";
    } else if ($n == 0) {
        $isPrompting = false;
    } else {
        # https://www.geeksforgeeks.org/php/how-to-add-elements-to-the-end-of-an-array-in-php/
        array_push($numbers, $n);
    }

} while ($isPrompting);

echo "El numero máximo es " . findMaxNumber($numbers) . "\n";

function findMaxNumber($array) {
    $maxNumber = $array[0];

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] > $maxNumber) {
            $maxNumber = $array[$i];
        }
    }

    return $maxNumber;
}

?>