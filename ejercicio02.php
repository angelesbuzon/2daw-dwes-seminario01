<?php 

# Ejercicio 2. Sumatoria de un array
# Crea una función que obtenga la sumatoria de un array de números.

include "./includes/funciones.php";

$numbers = [];

promptNumbers($numbers);

echo "La sumatoria de esos números es " . sum($numbers) . "\n";

# ---------------------
# Funciones específicas
# ---------------------

function sum($array) {
    $sum = 0;

    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i];
    }

    return $sum;
}

?>