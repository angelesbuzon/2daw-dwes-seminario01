<?php

# Ejercicio 1. Número máximo de un array
# Crea una función que obtenga el número máximo de un array de números.

include "./includes/funciones.php";

$numbers = [];

promptNumbers($numbers);

echo "El numero máximo es " . findMaxNumber($numbers) . "\n";

# ---------------------
# Funciones específicas
# ---------------------

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