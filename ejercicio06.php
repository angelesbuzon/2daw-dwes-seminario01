<?php

# Ejercicio 6. Contar ocurrencias de una subcadena
# Crea una función que cuente cuántas veces aparece una subcadena en un texto

include "./includes/funciones.php";

$text = promptString("Introduce un texto: ");
$substring = promptSubstring("Introduce lo que quieres buscar en el texto: ");
$isCaseSensitive = promptCaseSensitivity();

$substringOcurrences = countSubstring($substring, $text, $isCaseSensitive);

echo "Veces que aparece la subcadena \"" . $substring . "\" en el texto: " . $substringOcurrences . ".\n";

# ---------------------
# Funciones específicas
# ---------------------

function promptSubstring(string $message): string {
    $substring = "";

    do {
        $substring = readline($message);
        
        if ($substring === "") {
            echo "ERROR: No puede estar vacío.\n";
        }
    } while ($substring === "");

    return $substring;
}

function countSubstring(string $substring, string $text, bool $wantsCaseSensitivity): int {
    $counter = 0;
    $substringInSearch = "";

    if (!$wantsCaseSensitivity) {
        $substring = strtolower($substring);
        $text = strtolower($text);
    }

    # Límite del for: el último cachito de la misma longitud que nuestro substring
    for ($i = 0; $i < (strlen($text) - strlen($substring) + 1); $i++) {
        $substringInSearch = substr($text, $i, strlen($substring));

        if ($substringInSearch === $substring) {
            $counter++;
            $i = $i + strlen($substringInSearch) - 1; # Pasamos al carácter siguiente a la ocurrencia para agilizar
        }
    }

    return $counter;
}

?>
