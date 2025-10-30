<?php

# Ejercicio 5. Contar ocurrencias de una letra
# Crea una función que cuente cuántas veces aparece una letra en un texto.
#
# Nota: Esta versión del ejercicio es muy sencilla y no tiene en cuenta caracteres especiales del español u otros idiomas.
# Para tener esos en cuenta, necesitaría métodos especiales que requieren instalar extensiones o librerías; no quería complicarme demasiado aún.
# https://www.php.net/manual/en/function.mb-strlen.php
# https://www.php.net/manual/es/function.mb-strtolower.php

include "./includes/funciones.php";

$text = promptString("Introduce un texto: ");
$letter = promptLetter("Introduce la letra latina que quieres buscar en el texto: ");
$isCaseSensitive = promptCaseSensitivity();
$letterOcurrences = countChar($letter, $text, $isCaseSensitive);

echo "Veces que aparece la letra \"" . $letter . "\" en el texto: " . $letterOcurrences . ".\n";

# ---------------------
# Funciones específicas
# ---------------------

function promptLetter(string $mensaje): string {
    $char = "";
    $charIsValid = false;

    do {
        $char = readline($mensaje);
        var_dump($char);
        
        if ($char === "") {
            echo "ERROR: No puede estar vacío.\n";
        } else if (!ctype_alpha($char) || strlen($char) > 1) {
            # https://www.php.net/manual/es/function.ctype-alpha.php
            echo "ERROR: Tiene que ser un solo carácter alfabético.\n";
        } else {
            $charIsValid = true;
        }
    } while (!$charIsValid);

    return $char;
}

function countChar(string $char, string $text, bool $wantsCaseSensitivity): int {
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

/* Restos del intento de hacerlo más completo (por si quiero experimentar más tarde):

function promptLetter() {
    $char = "";
    $charIsValid = false;

    do {
        $char = readline("Introduce la letra que quieres buscar en el texto: ");
        
        if ($char === "") {
            echo "ERROR: No puede estar vacío.\n";
        } else if (!isSpanishLetter($char)) {
            echo "ERROR: Tiene que ser un carácter alfabético.\n";
        } else if (mb_strlen($char, "UTF-8") > 1) {
            # https://www.php.net/manual/en/function.mb-strlen.php
            # El strlen() normal da problemas con caracteres especiales porque lo que mira es el número de bytes.
            echo "ERROR: Tiene que ser una sola letra.\n";
        } else {
            $charIsValid = true;
        }
    } while (!$charIsValid);

    return $char;
}

function isSpanishLetter(string $letter) {
     # strtolower() normal no incluye caracteres especiales, mb_strtolower() sí especificándole la codificación
     # https://www.php.net/manual/es/function.mb-strtolower.php
      
     # ctype_alpha() tampoco los incluye
     # https://www.php.net/manual/en/function.ctype-alpha.php

    $letter = mb_strtolower($letter, "UTF-8");

    if (!(ctype_alpha($letter) || strtolower($char) == ("ñ"||"á"||"é"||"í"||"ó"||"ú"||"ü"))) {
        return true;
    } else {
        return false;
    }
}
*/

?>
