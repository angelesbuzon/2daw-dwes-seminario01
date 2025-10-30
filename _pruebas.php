<?php

include "./includes/variables.php";

$number = promptNumber("Mete un numero: ");

function promptNumber(string $message): int {
    $n;
    $nIsValid = false;

    do {
        $n = readline($message);

        if (!is_numeric($n)) {
            echo $inputMismatchNumber;
        } else if ($n / 10 < 1) {
            echo $inputOneDigit;
        } else {
            $nIsValid = true;
            return $n;
        }

    } while ($nIsValid);
}

?>