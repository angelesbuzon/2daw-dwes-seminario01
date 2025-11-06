<?php

/*
Ejercicio 25. Clasificador de notas con match
Crea una función que utilice la expresión match de PHP 8 para clasificar una nota numérica
(0-10) en su correspondiente calificación textual.
*/

include './includes/funciones.php';

do {
    $mark = promptInteger("Introduce la nota numérica (0-10): ");
} while ($mark < 0 || $mark > 10);

$mark = (int)$mark; // Casting necesario para que funcione la equivalencia en el match

echo "Eso equivale a un " . calcMark($mark) . "\n";

function calcMark($numericMark) {
    $wordyMark = match($numericMark) {
        9, 10 => 'Sobresaliente',
        7, 8 => 'Notable',
        5, 6 => 'Aprobado',
        0, 1, 2, 3, 4 => 'Suspenso',
        default => 'Error desconocido'
    };

    return $wordyMark;
}


?>