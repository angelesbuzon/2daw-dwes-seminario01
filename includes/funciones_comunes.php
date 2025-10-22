<?php

function promptNumbers(&$numbers) {
    # & === se modifica ese mismo array, no una copia específica de la función
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
}

?>