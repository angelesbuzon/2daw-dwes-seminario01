<?php 

# Ejercicio 3. Conversión de millas a kilómetros
# Crea una función que dada una distancia en millas calcule su correspondiente en kilómetros.
# 1 milla = 1.60934 kilómetros

include './includes/funciones.php';

$n;
$isPrompting = true;

do {
    $n = readline("Introduce la distancia en millas y te la convierto a kilómetros: ");

    if (!is_numeric($n)) {
        echo $inputMismatchNumber;
    } else {
        $isPrompting = false;
    }

} while ($isPrompting);

echo $n . " m = " . convertMilesToKilometers($n) . " km\n";

# ---------------------
# Funciones específicas
# ---------------------

function convertMilesToKilometers($miles) {
    return $miles * 1.60934;
}

?>