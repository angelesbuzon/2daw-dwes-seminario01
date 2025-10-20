<?php
# Ejercicio 1. Número máximo de un array
# Crea una función que obtenga el número máximo de un array de números.

include "funciones_comunes.php";

function findMaxNumber($array) {
    $maxNumber = $_GET[$array[0]] ?? 999;

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] > $maxNumber) {
            $maxNumber = $array[$i];
        }
    }

    return $maxNumber;
}

$numbers = [];

promptNumbers($numbers);

echo "El numero máximo es " . findMaxNumber($numbers) . "\n";



?>