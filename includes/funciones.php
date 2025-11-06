<?php

#
# Funciones que se usan varias veces en el proyecto
#
# NOTAS:
# & === se modifica esa misma variable, no una copia específica de la función

function promptNumberOfSeveralDigits(string $message) {
    $n;
    $nIsValid = false;

    do {
        $n = readline($message);

        if (!is_numeric($n)) {
            echo "ERROR: Solo puedes introducir números (usa punto en vez de coma para decimales).\n";
        } else if ($n / 10 < 1) {
            echo "ERROR: El número tiene que ser de más de un dígito.\n";
        } else {
            $nIsValid = true;
            return $n;
        }

    } while ($nIsValid);

    return $n;
}

function promptNumber(string $message) {
    $n;
    $nIsValid = false;

    do {
        $n = readline($message);

        if (!is_numeric($n)) {
            echo "ERROR: Solo puedes introducir números (usa punto en vez de coma para decimales).\n";
        } else {
            $nIsValid = true;
            return $n;
        }

    } while ($nIsValid);

    return $n;
}

function promptInteger(string $message) {
    $n;
    $nIsValid = false;

    do {
        $n = readline($message);

        if (!is_numeric($n) || !gettype($n) == "integer") {
            echo "ERROR: Solo puedes introducir números enteros.\n";
        } else {
            $nIsValid = true;
            return $n;
        }

    } while ($nIsValid);

    return $n;
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
    } while (is_null($str) || $str === "");

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

function isPalindrome($word) {
    $slicingPoint = (int)(strlen($word) / 2);
    #var_dump($slicingPoint);

    # https://www.php.net/manual/en/function.substr.php
    $left = substr($word, 0, $slicingPoint);
    $right = substr($word, $slicingPoint+1, strlen($word));

    # var_dump($left);
    # var_dump($right);

    $isPalindrome = true;
    $j = strlen($right)-1;

    for ($i = 0; $i < strlen($left) && $isPalindrome; $i++) {
        # echo $left[$i] . ", " . $right[$j] . "\n";

        if ($left[$i] !== $right[$j]) {
            $isPalindrome = false;
        } else {
            $j--;
        }
    }

    return $isPalindrome;
}

?>