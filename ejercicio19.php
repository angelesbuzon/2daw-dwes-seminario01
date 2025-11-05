<?php

# WIP Ejercicio 19. Eliminar vocales
# Crea una función que, dada una cadena de texto, elimine todas las vocales de la cadena.
# Ejemplo: eliminarVocales("Hola Mundo") → "Hl Mnd"

include './includes/funciones.php';

$text = promptString("Introduce un texto y le quitaré las vocales: ");

var_dump($text);

$textWithoutVowels = removeVowels($text);

echo $textWithoutVowels . "\n";

function removeVowels(string $text): string {
    # str_replace() elimina todas las ocurrencias de lo que le indiques
    # Sin cambiar el texto, podría hacer varios str_replace a palo seco (5 mayus, 5 minus),
    # pero prefiero hacer un bucle que controle cuándo eliminar

    for ($i = 0; $i < strlen($text); $i++) {
        # https://inthedigital.co.uk/use-phps-in_array-to-compare-a-variable-to-multiple-values/
        if (in_array(strtolower($text[$i]), ["a", "e", "i", "o", "u"])) {
            $text = str_replace($text[$i], "", $text); # Eliminar el carácter actual por nada en $text
            $i--; # Compensar eliminación por si hay vocales seguidas (str_replace)
        }
    }

    return $text;
}

?>