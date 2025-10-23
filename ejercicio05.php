<?php

# Ejercicio 5. Contar ocurrencias de una letra
# Crea una función que cuente cuántas veces aparece una letra en un texto.

include "./includes/funciones.php";

$character = promptChar();
$text = promptString();
$characterOcurrences = countChar($character, $text);

echo "El carácter \"" . $character . "\" aparece en el texto " . $characterOcurrences . " veces.\n";

# ---------------------
# Funciones específicas
# ---------------------

function promptChar() {
    $char = "";
    $charIsValid = false;

    do {
        $char = readline("Introduce el carácter que quieres buscar en el texto: ");
        
        if ($char === "") {
            echo "ERROR: No puede estar vacío.\n";
        } else if (strlen($char) > 1) {
            echo "ERROR: Tiene que ser un solo carácter.\n";
        } else {
            $charIsValid = true;
        }
    } while (!$charIsValid);

    return $char;
}

function countChar($char, $text) {
    $counter = 0;

    # Se puede hacer con substr, pero es más fácil con [i] (al final es un array)
    # https://www.php.net/manual/en/function.substr.php

    for ($i = 0; $i < strlen($text); $i++) {
        if ($text[$i] === $char) $counter++;
    }

    return $counter;
}

?>
