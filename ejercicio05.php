<?php

# Ejercicio 5. Contar ocurrencias de una letra
# Crea una función que cuente cuántas veces aparece una letra en un texto.

include "./includes/funciones.php";

$letter = promptLetter();
$text = promptString();
$cases = promptCaseSensitivity();
$letterOcurrences = countChar($letter, $text, $cases);

echo "La letra \"" . $letter . "\" aparece en el texto " . $letterOcurrences . " veces.\n";

# ---------------------
# Funciones específicas
# ---------------------

function promptLetter() {
    $char = "";
    $charIsValid = false;

    do {
        $char = readline("Introduce la letra que quieres buscar en el texto: ");
        
        if ($char === "") {
            echo "ERROR: No puede estar vacío.\n";
        } else if (!IntlChar::isalpha($char)) { # https://www.php.net/manual/en/intlchar.isalpha.php
            echo "ERROR: Tiene que ser un carácter alfabético.\n";
        } else if (strlen($char) > 1) {
            echo "ERROR: Tiene que ser una sola letra.\n";
        } else {
            $charIsValid = true;
        }
    } while (!$charIsValid);

    return $char;
}

function promptCaseSensitivity() {
    $caseSensitivity = -1;
    $wantsCaseSensitivity;

    do {
        $caseSensitivity = readline("¿Quieres distinguir entre minúsculas y mayúsculas? [1 = Sí, 0 = No]: ");

        if ($caseSensitivity != 0 && $caseSensitivity != 1) {
            echo "ERROR: Soy un robot, bip-bup; pon 1 o 0.\n";
        } else if ($caseSensitivity == 1) {
            $wantsCaseSensitivity = true;
        } else {
            $wantsCaseSensitivity = false;
        }
    } while ($caseSensitivity != 0 && $caseSensitivity != 1);

    return $wantsCaseSensitivity;
}

function countChar($char, $text, $wantsCaseSensitivity) {
    $counter = 0;

    if (!$wantsCaseSensitivity) {
        $char = strtolower($char);
        $text = strtolower($text);
    }

    # Se puede hacer con substr, pero es más fácil con [i] (al final es un array)
    # https://www.php.net/manual/en/function.substr.php

    for ($i = 0; $i < strlen($text); $i++) {
        if ($text[$i] === $char) $counter++;
    }

    return $counter;
}

?>
