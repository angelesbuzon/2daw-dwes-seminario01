<?php

# Ejercicio 1. Número máximo de un array
# Crea una función que obtenga el número máximo de un array de números.

include "./includes/funciones.php";

$numbers = [];

promptNumericArray($numbers);

$maxNumber = findMaxNumber($numbers);

$finalMessage = ($maxNumber == "")
    ? "No se ha podido determinar un número máximo.\n"
    : "El numero máximo es " . $maxNumber . "\n";

echo $finalMessage;

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