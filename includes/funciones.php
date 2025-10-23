<?php

include "./includes/variables.php";

#
# Funciones que se usan varias veces en el proyecto
#
# NOTAS:
# & === se modifica esa misma variable, no una copia específica de la función

function promptNumbers(&$numbers) {
    
    $n;
    $isPrompting = true;

    do {
        $n = readline("Introduce un número cualquiera (o 0 para parar el bucle): ");

        if (!is_numeric($n)) {
            echo $inputMismatchNumber;
        } else if ($n == 0) {
            $isPrompting = false;
        } else {
            # https://www.geeksforgeeks.org/php/how-to-add-elements-to-the-end-of-an-array-in-php/
            array_push($numbers, $n);
        }

    } while ($isPrompting);
}

function promptString() {
    $str = "";
    do {
        $str = readline("Introduce una palabra o frase: ");
    } while (is_null($str));

    return $str;
}


?>