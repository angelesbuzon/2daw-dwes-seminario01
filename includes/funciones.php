<?php

include "./includes/variables.php";

#
# Funciones que se usan varias veces en el proyecto
#
# NOTAS:
# & === se modifica esa misma variable, no una copia específica de la función

function promptNumber(string $message): int {
    $n;
    $nIsValid = false;

    do {
        $n = readline($message);

        if (!is_numeric($n)) {
            echo "ERROR: Solo puedes introducir números (usa punto en vez de coma para decimales).\n";
        } else if ($n / 10 < 1) {
            echo "ERROR: El número tiene que ser de más de un dígito.";
        } else {
            $nIsValid = true;
            return $n;
        }

    } while ($nIsValid);
}

function promptNumericArray(&$numbers) {
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



function promptString(string $message): string {
    $str = "";
    do {
        $str = readline($message);
    } while (is_null($str));

    return $str;
}

function promptCaseSensitivity(): bool {
    $caseSensitivity = -1;

    do {
        $caseSensitivity = readline("¿Quieres distinguir entre minúsculas y mayúsculas? [1 = Sí, 0 = No]: ");

        if ($caseSensitivity != 0 && $caseSensitivity != 1) {
            echo "ERROR: Soy un robot, bip-bup; pon 1 o 0.\n";
        } else if ($caseSensitivity == 1) {
            return true;
        } else {
            return false;
        }
    } while ($caseSensitivity != 0 && $caseSensitivity != 1);
}

?>